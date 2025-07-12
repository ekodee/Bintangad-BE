<?php

namespace App\Filament\Resources\OrderTransactionResource\Pages;

use App\Filament\Resources\OrderTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrderTransaction extends EditRecord
{
    protected static string $resource = OrderTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
