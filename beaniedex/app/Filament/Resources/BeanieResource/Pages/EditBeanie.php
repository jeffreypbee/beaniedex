<?php

namespace App\Filament\Resources\BeanieResource\Pages;

use App\Filament\Resources\BeanieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBeanie extends EditRecord
{
    protected static string $resource = BeanieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
