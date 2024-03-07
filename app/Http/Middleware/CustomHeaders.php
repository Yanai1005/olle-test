<?php

namespace App\Http\Middleware;

use Closure;

class CustomHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // カスタムのCookieヘッダーを設定
        $response->headers->set('Set-Cookie', 'CookieName=CookieValue; SameSite=None; Secure;');

        return $response;
    }
}
