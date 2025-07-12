<?php

namespace App\Filament\Resources\OrderTransactionResource\Pages;

use App\Filament\Resources\OrderTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderTransactions extends ListRecords
{
    protected static string $resource = OrderTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
