<?php

namespace App\Http\Middleware;

use Closure;

class CheckUser
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
    if (!$request->user()->isUser()) {
      return abort(403, "Only website User can access this page or action.");
    }

    return $next($request);
  }
}