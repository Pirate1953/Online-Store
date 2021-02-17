<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  $request - Request class object
     * @param  $next - Closure class object
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      if ($request->input('token') !== 'my-secret-token') {
            return redirect('testmiddleware');
      }
      return $next($request);
    }
}
