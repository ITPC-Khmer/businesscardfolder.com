<?php

namespace App\Http\Middleware;

use Response;
use Closure;

class JsonpResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $callback = $request->query->get("callback");
        //$jsonp = $request->query->get("__jsonp");
        if ($callback) {
            $request->query->remove("callback");
        }

        $response = $next($request) ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE')
            ->header('Access-Control-Allow-Credentials', true)
            ->header('Access-Control-Allow-Headers', 'Authorization,Content-Type');

        if ($callback) {
            if (is_numeric($callback)) {
                $callback = "callback";
            }
            return Response::json($response->getOriginalContent())->setCallback($callback);
        } else {
            return $response;
        }
    }
}
