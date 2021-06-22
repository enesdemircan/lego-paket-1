<?php

    namespace App\Http\Middleware;



    use Closure;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Http\Request;

    class Language
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle(Request $request, Closure $next)
        {

            if ($request->segment(1))
            {
                config(['app.locale' => $request->segment(1)]);
            }
            else
            {
                // This is optional as Laravel will automatically set the fallback language if there is none specified
                config(['app.locale' => 'tr']);
            }


            return $next($request);
        }
    }
