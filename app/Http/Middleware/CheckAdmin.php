<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
    if (!$request->user()->isAdmin()) {
      return abort(403, "Only website Admin can access this page or action.");
    }
    
    return $next($request);
  }
}