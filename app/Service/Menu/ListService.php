<?php

namespace App\Service\Menu;

use App\Models\Post;
use App\Service\Menu\MenuInterfaces\MenuInterface;

class ListService implements MenuInterface
{
    public function show($type, $slug, $id)
    {
        $data = Post::query()
        ->whereHas('menu', fn ($q) => $q->where('type', 'list'))
        ->where('is_active', 1)->orderBy('created_at','desc')
        ->where('menu_id', $id)->with('categori','menu')->get();
            return [
                'title' => $slug,
                'data' => $data,
                'view' => 'page.list',
            ];

    }
}
