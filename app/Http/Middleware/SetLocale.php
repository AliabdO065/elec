<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $enabled = Language::where('is_enabled', true)->orderBy('sort_order')->get();
        $default = $enabled->firstWhere('is_default', true) ?? $enabled->first();

        $locale = session('site_locale');
        if (! $locale || ! $enabled->contains('code', $locale)) {
            $locale = $default->code ?? config('app.fallback_locale');
        }

        App::setLocale($locale);

        View::share('enabledLanguages', $enabled);
        View::share('currentLocale', $locale);

        return $next($request);
    }
}
