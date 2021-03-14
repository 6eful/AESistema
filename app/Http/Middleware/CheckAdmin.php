<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     // protected $auth;

     public function __construct(Guard $auth) {
       // Guard $auth
         $this->auth = $auth;
     }

    public function handle($request, Closure $next) {

      try {
        if(Auth::check()){
          if((Auth::user()->accessLevel) == true){
            // return redirect()->route('users.index');
            return $next($request);
          }
          // return $next($request);
          return redirect()->route('clients.index');
        }

      } catch (Exception $e) {
          echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      }

        return $next($request);
    }
}
