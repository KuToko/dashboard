<?php

namespace App\Filament\Resources\RegencyResource\Pages;

use App\Filament\Resources\RegencyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRegencies extends ManageRecords
{
    protected static string $resource = RegencyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
