<?php

namespace App\Filament\Resources\MenuResource\Pages;

use App\Filament\Resources\MenuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;

class ListMenus extends ListRecords
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        $menu = ['place','list', 'page', 'link','more'];
        foreach ($menu as $item) {
            $tabs[$item] = Tab::make()->query(fn ($query) => $query->where('type', $item));
        }
        return $tabs;
    }
}
