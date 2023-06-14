<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VillageResource\Pages;
use App\Filament\Resources\VillageResource\RelationManagers;
use App\Models\Village;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VillageResource extends Resource
{
    protected static ?string $model = Village::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationGroup = 'Locations';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('district_id')
                    ->relationship('district', 'name')
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('district.name'),
                Tables\Columns\TextColumn::make('name')->searchable(),
            ])
            ->filters([
                Filter::make('name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageVillages::route('/'),
        ];
    }
}
