<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Post;
use App\Models\PostVisitor;

class PostTrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $p = $request->route('slug');
        $postId = Post::where('slug', $p)->first()->id;
        $ip = $request->ip();
        // if(Env::get('APP_ENV') == 'production') {
        // PostVisitorJob::dispatch($postId, $ip);
        // }
        
        $alreadyVisited = PostVisitor::where('post_id', $postId)
        ->where('ip_address', $ip)
        ->whereDate('visited_at', today())
        ->exists();

        if (!$alreadyVisited) {
            PostVisitor::create([
                'post_id' => $postId,
                'ip_address' => $ip,
                'visited_at' => now(),
            ]);
        }
        return $next($request);
    }
}
