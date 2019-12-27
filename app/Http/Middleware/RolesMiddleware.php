<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RolesMiddleware
{

  public function handle($request, Closure $next){
    if(Auth::user()->rol >= 50){
      return $next($request);
    }
    else{
      return redirect('mensaje');
    }
  }

}
