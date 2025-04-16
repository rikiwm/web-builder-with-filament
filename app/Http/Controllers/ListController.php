<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
class ListController extends Controller
{
    //
    public function list($slug)
    {
        $title = Str::headline($slug ?? '');
        try {
            $data = Cache::remember("post_{$slug}", 60, function() use ($slug) {
                return Post::with('user','categori','menu')->where('slug', $slug)->first();
            });

            $top_in_list = Post::with('user','categori','menu')
            ->where('is_active', true)
            ->where('categori_id', $data->categori_id)
            ->whereNot('id', $data->id)
            ->whereHas('menu', function($query) use ($data) {
                $query->where('slug', $data->menu->slug);
            })
          ->limit(5)->cursor();
            $currentUrl = $data->menu->slug ?? '';
            $viewer = PostVisitor::where('post_id', $data->id)->count();
           return view('page.show', compact('slug', 'data','title','currentUrl','top_in_list','viewer'));
        } catch (\Exception $e) {
            return response()->view('errors.custom', [], 500);
        }
    }

    public function list_kelurahan($slug)
    {
        $title = Str::headline($slug ?? '');
        try {
            $data = Cache::remember("post_{$slug}", 60, function() use ($slug) {
                return Post::with('user','categori','menu')->where('slug', $slug)->first();
            });
            $currentUrl = $data->menu->slug ?? '';
           return view('page.show-2', compact('slug', 'data','title','currentUrl'));
        } catch (\Exception $e) {
            return response()->view('errors.custom', [], 500);
        }
    }
}
