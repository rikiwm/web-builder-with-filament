<?php

namespace App\View\Components;

use App\Models\Menu;
use App\Models\SettingWeb;
use App\Models\WebVisitor;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;
use Illuminate\View\View;
use Illuminate\Support\Benchmark;
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
        $social = cache()->remember('app_social', 60*60, function () {
            return SettingWeb::query()->where('key','social')->get();
        });

        $nav = Cache::remember('nav_menu_guest',60, function () {
            return Menu::where('parent_id', null)
                ->with('children')->where('is_active', true)
                ->where('is_visible', 0)
                ->orderBy('order','asc')
                ->get();
        });

        // $todayVisitors = WebVisitor::whereDate('visited_at', today())->count();
        // $monthlyVisitors = WebVisitor::whereMonth('visited_at', now()->month)
        //                             ->whereYear('visited_at', now()->year)
        //                             ->count();

        // $yearlyVisitors = WebVisitor::whereYear('visited_at', now()->year)->count();
        // $online = WebVisitor::where('is_online', true)->count();
        // Benchmark::dd(fn () => $nav, iterations: 10); 
        // Benchmark::dd([
        //     'todayVisitors 1' => fn () => $todayVisitors, 
        //     'monthlyVisitors 1' => fn () => $monthlyVisitors, 
        //     'yearlyVisitors 1' => fn () => $yearlyVisitors, 
        //     'online 1' => fn () => $online, 
        //     'nav 1' => fn () => $nav, 
      
        // ]);
     
        return view('layouts.guest',[
            'nav' => $nav,
            'app_name' => $app_name,
            'copyright' => $copyright,
            'title' => $title ?? '',
            'social' => $social,
            // 'visitor'=>compact('todayVisitors','monthlyVisitors')
        ]);
    }
}
