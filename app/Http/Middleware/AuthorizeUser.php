<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorizeUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)
     */

    public function handle(Request $request, Closure $next, ... $roles): Response
    {
        // ambil data user yg login
        // fungsi user() diambil dari UserModel.php
        $user_role = $request->user()->getRole();

        if (in_array($user_role, $roles)) { // cek apakah user punya role yg diinginkan, semisal hasRole('admin')
            return $next($request); // Jika ada, maka lanjutkan request
        }

        // jika tidak punya role, maka tampilkan error 403
        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini');
    }
}
