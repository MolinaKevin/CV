<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App;
use Config;


class SetLocale
{
    public function handle(Request $request, Closure $next, $lang = null)
    {
        if (in_array($lang, ['es', 'de', 'en'])) {
            $locale = $lang;
            Session::put('locale', $locale);
        } elseif (Session::has('locale') && in_array(Session::get('locale'), ['es', 'de', 'en'])) {
            $locale = Session::get('locale');
        } else {
            $browserLocale = substr((string) $request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);

            if (in_array($browserLocale, ['es', 'de', 'en'])) {
                $locale = $browserLocale;
            } else {
                $locale = Config::get('app.locale', 'es');
            }

            Session::put('locale', $locale);
        }

        App::setLocale($locale);

        \Log::info('SetLocale', [
            'route_lang' => $lang,
            'session_locale' => Session::get('locale'),
            'app_locale_before_set' => App::getLocale(),
            'final_locale' => $locale,
            'accept_language' => $request->server('HTTP_ACCEPT_LANGUAGE'),
        ]);
        return $next($request);
    }
}
