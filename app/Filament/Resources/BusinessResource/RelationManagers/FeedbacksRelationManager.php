<?php

namespace App\Filament\Resources\BusinessResource\RelationManagers;

use AlperenErsoy\FilamentExport\Actions\FilamentExportHeaderAction;
use AskerAkbar\GptTrixEditor\Components\GptTrixEditor;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbacksRelationManager extends RelationManager
{
    protected static string $relationship = 'feedbacks';

    protected static ?string $recordTitleAttribute = 'feedbacks';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->columnSpanFull(),
                GptTrixEditor::make('feedbacks')->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('feedbacks')->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                FilamentExportHeaderAction::make('export'),
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
