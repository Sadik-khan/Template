<?php

namespace App\Http\Middleware;

use App\Models\IP\IpList;
use Closure;

class IpFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(get_option('ip_filter') && get_option('ip_filter') == 'off') {
            return $next($request);
        } else {
            $ips = IpList::where('ip', request()->ip())->first();
            if($ips) {
                return $next($request);
            } else {
                return redirect()->route('ip_block');
            }
        }
    }
}
