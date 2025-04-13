<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\WebVisitor;

class WebTrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $agent = $request->header('User-Agent');
        $mac = $this->getMAcAddressShellExec();
        $visitor = WebVisitor::where('ip_address', $ip)
        ->whereDate('visited_at', today())
        ->first();
            if (!$visitor) {
            WebVisitor::create([
            'ip_address' => $ip,
            'visited_at' => now(),
            'is_online' => true,
            'user_agent' => $agent,
            'mac_address' => $mac,
            'value' => 'asdasdasd',
            ]);
            }
        // if(Env::get('APP_ENV') == 'production') {
        //     dd($ip);
        //     // WebVisitorJob::dispatch($ip, $agent, $mac);
        // } else {
           
        // }
        return $next($request);
    }
    
    private function getMAcAddressExec()
    {
        return substr(exec('getmac'), 0, 17);
    }

    private function getMAcAddressShellExec()
    {
            return substr(shell_exec('getmac'), 159,20);
    }
}
