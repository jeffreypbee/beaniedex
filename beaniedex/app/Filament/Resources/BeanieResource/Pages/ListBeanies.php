<?php

namespace App\Filament\Resources\BeanieResource\Pages;

use App\Filament\Resources\BeanieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeanies extends ListRecords
{
    protected static string $resource = BeanieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
