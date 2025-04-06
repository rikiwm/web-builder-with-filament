<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use App\Models\Menu;
use App\Models\SettingWeb;
use App\Service\Menu\MenuFactories\MenuFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //
    private MenuFactory $menuFactory;

    /**
     * Konstruktor dengan Dependency Injection.
     *
     * @param  MenuInterface  $menuInterface
     */
    public function __construct(MenuFactory $menuFactory)
    {
        $this->menuFactory = $menuFactory;
    }

    public function index()
    {

        $hero = cache()->remember('setting_hero', 60*60, function () {
            return SettingWeb::query()->where('key','hero-section')->first();
        });
        $welcome = cache()->remember('setting_welcome', 60*60, function () {
            return SettingWeb::query()->where('key','welcome')->first();
        });

        $section = cache()->remember('section', 1, function() {
            return SettingWeb::query()->where('status', '1')->where('key','section-1')->first();
        });
        return view('welcome',[
            'hero' => $hero,
            'section' => $section,
            'welcome' => $welcome,
        ]);
    }

    public function show($slug)
    {
        $menu = Menu::where('slug', $slug)->first();
        try {
            if (!$menu) {
                throw new \InvalidArgumentException('Menu not found');
            }

            if ($menu->type === 'place') {
                throw new \InvalidArgumentException('Unsupported menu type: '.$menu->type);
            }
            if ($menu->type === 'link') {
                $url = Str::replace(Request::url(),'', $menu->slug);
                return redirect('https://'.$url );
            }
            $postService = MenuFactory::make($menu->type);

        } catch (\InvalidArgumentException $e) {
            return redirect()->route('home')->with('error', $e->getMessage());
        }

        $cacheKey = 'post_'.$menu->type.'_'.$slug.'_'.$menu->id;

        $data = Cache::remember($cacheKey, 60, function() use ($postService, $menu, $slug) {
            return $postService->show($menu->type, $slug, $menu->id);
        });

        $category = Categori::query()->where('id', $data['data']['categori_id'] ?? null )->select('name','description')->first();
        if (!$category) {
            $category = Categori::query()->select('name','description')->get();
        }



        return view($data['view'],
            [
                'category' => $category ?? null,
                'title' => $data['title'] ?? '',
                'data' => $data['data'] ?? null,
                'model_view' => $menu['model_view'] ?? null,
            ]
        );
    }
}
