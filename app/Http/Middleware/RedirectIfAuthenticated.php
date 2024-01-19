<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

                switch (Auth::user()->getRoleNames()[0]) {
                    case 'member':
                        return redirect()->intended(route('member.home.index'));
                        break;
                    case 'ustadz':
                        return redirect()->intended(route('ustadz.home.index'));
                        break;
                    case 'admin':
                        return redirect()->intended(route('admin.home.index'));
                        break;
                    default:
                        return redirect()->intended(route('login.index'));
                        break;
                }
            }
        }

        return $next($request);
    }
}
