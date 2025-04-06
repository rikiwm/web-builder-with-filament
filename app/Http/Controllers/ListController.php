<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
            $currentUrl = $data->menu->slug ?? '';
           return view('page.show', compact('slug', 'data','title','currentUrl'));
        } catch (\Exception $e) {
            return response()->view('errors.custom', [], 500);
        }
    }
}
