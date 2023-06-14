<?php

namespace App\Filament\Resources\VillageResource\Pages;

use App\Filament\Resources\VillageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageVillages extends ManageRecords
{
    protected static string $resource = VillageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
