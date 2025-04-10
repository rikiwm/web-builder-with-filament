<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use App\Models\Menu;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $menu = Menu::where('type', 'list')->where('is_active', 1)->get();
        foreach ($menu as $item) {
            $tabs[$item->name] = Tab::make()->query(fn ($query) => $query->where('menu_id', $item->id));
        }
        return $tabs;
    }
}
