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

    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // cek apakah user punya role yg diinginkan
        // if ($request->user()->hasRole(...$roles)) { // spread operator untuk mengirimkan array of roles
            // Karena terdapat banyak role, maka membutuhkan array di roles sehingga butuh explode
        if ($request->user()->hasRole(explode(',', implode(',', $roles)))) { // explode untuk mengubah string menjadi array
            return $next($request); // Jika ada, maka lanjutkan request
        }

        // jika tidak punya role, maka tampilkan error 403
        abort(403, 'Forbidden. Kamu tidak punya akses ke halaman ini');
    }
}
