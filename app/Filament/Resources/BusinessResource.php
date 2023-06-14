<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use App\Filament\Resources\BusinessResource\Pages;
use App\Filament\Resources\BusinessResource\RelationManagers;
use App\Models\Business;
use App\Models\Province;
use AskerAkbar\GptTrixEditor\Components\GptTrixEditor;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Yepsua\Filament\Forms\Components\Rating;

class BusinessResource extends Resource
{
    protected static ?string $model = Business::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Detail')
                    ->schema([
                        Forms\Components\Select::make('claim_by')
                            ->relationship('claim_by', 'name')
                            ->searchable(),
                        Forms\Components\Select::make('created_by')
                            ->relationship('created_by', 'name')
                            ->searchable(),
                        Forms\Components\Select::make('province_id')
                            ->searchable()
                            ->options(
                                \App\Models\Province::all()->pluck('name', 'id')
                            )
                            ->reactive()
                            ->afterStateUpdated(function ($set) {
                                $set('regency_id', null);
                                $set('district_id', null);
                                $set('village_id', null);
                            }),
                        Forms\Components\Select::make('regency_id')
                            ->searchable()
                            ->options(function ($get) {
                                $province = \App\Models\Province::find($get('province_id'));

                                if (!$province) {
                                    return \App\Models\Regency::all()->pluck('name', 'id');
                                }

                                return $province->regencies->pluck('name', 'id');
                            })
                            ->reactive()
                            ->afterStateUpdated(function ($set) {
                                $set('district_id', null);
                                $set('village_id', null);
                            }),
                        Forms\Components\Select::make('district_id')
                            ->searchable()
                            ->options(function ($get) {
                                $regency = \App\Models\Regency::find($get('regency_id'));

                                if (!$regency) {
                                    return \App\Models\District::all()->pluck('name', 'id');
                                }

                                return $regency->districts->pluck('name', 'id');
                            })
                            ->reactive()
                            ->afterStateUpdated(function ($set) {
                                $set('village_id', null);
                            }),
                        Forms\Components\Select::make('village_id')
                            ->searchable()
                            ->options(function ($get) {
                                $district = \App\Models\District::find($get('district_id'));

                                if (!$district) {
                                    return \App\Models\Village::all()->pluck('name', 'id');
                                }

                                return $district->villages->pluck('name', 'id');
                            })
                            ->reactive(),
                        Forms\Components\TextInput::make('username')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        \Cheesegrits\FilamentGoogleMaps\Fields\Map::make('location')->columnSpanFull(),
                        Forms\Components\TextInput::make('postal_code')
                            ->required()
                            ->maxLength(6),
                        Rating::make('google_maps_rating'),
                        GptTrixEditor::make('description')->columnSpanFull(),
                        Forms\Components\FileUpload::make('avatar'),
                        Forms\Components\DateTimePicker::make('released_at'),
                        Forms\Components\Toggle::make('added_from_system')
                            ->required(),
                        Forms\Components\Select::make('link_theme')
                            ->options([
                                'dark' => 'dark',
                                'classic' => 'classic',
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('place_id')
                            ->maxLength(255),
                    ]),
                Fieldset::make('Schedule')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_sunday_open')->reactive(),
                                Forms\Components\TimePicker::make('sunday_start_time')->hidden(function ($get) {
                                    return !$get('is_sunday_open');
                                }),
                                Forms\Components\TimePicker::make('sunday_end_time')->hidden(function ($get) {
                                    return !$get('is_sunday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_monday_open')->reactive(),
                                Forms\Components\TimePicker::make('monday_start_time')->hidden(function ($get) {
                                    return !$get('is_monday_open');
                                }),
                                Forms\Components\TimePicker::make('monday_end_time')->hidden(function ($get) {
                                    return !$get('is_monday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_tuesday_open')->reactive(),
                                Forms\Components\TimePicker::make('tuesday_start_time')->hidden(function ($get) {
                                    return !$get('is_tuesday_open');
                                }),
                                Forms\Components\TimePicker::make('tuesday_end_time')->hidden(function ($get) {
                                    return !$get('is_tuesday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_wednesday_open')->reactive(),
                                Forms\Components\TimePicker::make('wednesday_start_time')->hidden(function ($get) {
                                    return !$get('is_wednesday_open');
                                }),
                                Forms\Components\TimePicker::make('wednesday_end_time')->hidden(function ($get) {
                                    return !$get('is_wednesday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_thursday_open')->reactive(),
                                Forms\Components\TimePicker::make('thursday_start_time')->hidden(function ($get) {
                                    return !$get('is_thursday_open');
                                }),
                                Forms\Components\TimePicker::make('thursday_end_time')->hidden(function ($get) {
                                    return !$get('is_thursday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_friday_open')->reactive(),
                                Forms\Components\TimePicker::make('friday_start_time')->hidden(function ($get) {
                                    return !$get('is_friday_open');
                                }),
                                Forms\Components\TimePicker::make('friday_end_time')->hidden(function ($get) {
                                    return !$get('is_friday_open');
                                }),
                            ]),
                        Grid::make(3)
                            ->schema([
                                Forms\Components\Toggle::make('is_saturday_open')->reactive(),
                                Forms\Components\TimePicker::make('saturday_start_time')->hidden(function ($get) {
                                    return !$get('is_saturday_open');
                                }),
                                Forms\Components\TimePicker::make('saturday_end_time')->hidden(function ($get) {
                                    return !$get('is_saturday_open');
                                }),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')->searchable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('username'),
                Filter::make('name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export'),
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('export')
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProductsRelationManager::class,
            RelationManagers\OrdersRelationManager::class,
            RelationManagers\FeedbacksRelationManager::class,
            RelationManagers\UpvotesRelationManager::class,
            RelationManagers\PostsRelationManager::class,
            RelationManagers\BusinessCategoriesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBusinesses::route('/'),
            'create' => Pages\CreateBusiness::route('/create'),
            'edit' => Pages\EditBusiness::route('/{record}/edit'),
        ];
    }
}
