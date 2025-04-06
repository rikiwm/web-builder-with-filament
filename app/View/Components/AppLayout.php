<?php

namespace App\View\Components;

use App\Models\Menu;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $nav = Cache::remember('nav_menu_app', 60, function () {
            return Menu::where('parent_id', null)
                ->with('children')->where('is_active', true)
                ->orderBy('order','asc')
                ->get();
        });
        return view('layouts.app',[
            // 'nav' => $nav
        ]);
    }
}
