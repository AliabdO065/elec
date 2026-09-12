<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetAdminLocale
{
    protected array $available = ['de', 'en', 'ar'];

    public function handle(Request $request, Closure $next)
    {
        $locale = session('admin_locale');

        if (! $locale || ! in_array($locale, $this->available, true)) {
            $locale = 'de';
        }

        App::setLocale($locale);

        return $next($request);
    }
}
