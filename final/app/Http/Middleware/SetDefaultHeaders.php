<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetDefaultHeaders {
  public function handle(Request $request, Closure $next): Response {
    if (!$request->header('X-Requested-With'))
      $request->headers->set('X-Requested-With', 'XMLHttpRequest');

    if (!$request->header('Content-Type'))
      $request->headers->set('Content-Type', 'application/json');
    return $next($request);
  }
}
