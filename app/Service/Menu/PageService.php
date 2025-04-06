<?php

namespace App\Service\Menu;

use App\Models\Page;
use App\Service\Menu\MenuInterfaces\MenuInterface;

class PageService implements MenuInterface
{
    public function show($type, $slug, $id)
    {
        $data = Page::query()->where('slug', $slug)->where('menu_id', $id)->where('is_active', 1)->first();

        return [
            'title' =>$data->title ?? '',
            'data' => $data ?? [],
            'view' => 'page.page',
        ];
       
    }
}
