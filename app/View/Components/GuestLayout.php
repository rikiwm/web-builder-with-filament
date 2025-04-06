<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\SettingWeb;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $app_name = cache()->remember('app_name', 60*60, function () {
            return SettingWeb::query()->where('key','app')->first();
        }); 
        $copyright = cache()->remember('app_copyright', 60*60, function () {
            return SettingWeb::query()->where('key','copyright')->first();
        });

        $nav = Cache::remember('nav_menu_guest',60, function () {
            return Menu::where('parent_id', null)
                ->with('children')->where('is_active', true)
                ->orderBy('order','asc')
                ->get();
        });


        return view('layouts.guest',[
            'nav' => $nav,
            'app_name' => $app_name,
            'copyright' => $copyright
        ]);
    }
}
