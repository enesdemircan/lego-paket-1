<?php

    namespace App\Http\Middleware;

    use Carbon\Carbon;
    use Closure;
    use Illuminate\Support\Facades\Cache;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\View;
    use App\Connections;


    class Variables
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
            //Session::flush();

            if (empty($request->segment(1)))
            {
                return redirect('/'.config('app.locale'));
            }

            if (Session::has('sepet') && $request->is('sepet_sil/*') == false)
            {
                $yeniden_siralama = array_values(Session::get('sepet'));
                Session::put('sepet',$yeniden_siralama);
            }
            else
            {
                Session::put('siparis','1');
            }

            $lang              = config('app.locale');
            $sepet             = Session::get('sepet');
            $toplam_fiyat       = '';
            $sepet_toplam      = 0;
            $sepet_toplam_fiyat = '';
            $connections       = new Connections();

            if (env('DEVELOPER_MODE') == true)
            {
                if (Cache::has('designs_'.$lang))
                {
                    Cache::forget('designs_'.$lang);
                }

                if (Cache::has('translations_'.$lang))
                {
                    Cache::forget('translations_'.$lang);
                }

                $designs      = $connections->DesignComponentList($lang);
                $translations = null;

                if (isset($designs->ceviriler))
                {
                    foreach ($designs->ceviriler as $translate)
                    {
                        $translations[$translate->tag] = $translate->yazi;
                    }
                }
            }
            else
            {

                if (Cache::has('designs_'.$lang))
                {
                    $designs      = Cache::get('designs_'.$lang);
                    $translations = Cache::get('translations_'.$lang);
                }
                else
                {
                    $designsList      = $connections->DesignComponentList($lang);
                    $designs          = Cache::remember('designs_'.$lang, 60*120, function () use ($designsList) {return $designsList;});
                    $translationsList = null;

                    if (isset($designs->ceviriler))
                    {
                        foreach ($designs->ceviriler as $translate)
                        {
                            $translationsList[$translate->tag] = $translate->yazi;
                        }
                    }

                    $translations = Cache::remember('translations_'.$lang, 60*120, function () use ($translationsList) {return $translationsList;});
                }
            }

            $ladders           = $connections->LaddersDataAllList($lang);
            $generalModule     = '';

            if (isset($designs->moduller))
            {
                foreach($designs->moduller as $key => $modul)
                {
                    if($modul->durum == 'Aktif' and $modul->tipi == 'Genel')
                    {
                        $datas 			= $connections->DataGetAll($modul->bilesenuuid,$lang,null);
                        $generalModule .= view('modules/'.$modul->view,compact('modul','datas','designs','lang','translations','ladders'))->render();
                    }
                }
            }


            View::share([
                'sepet'             => $sepet,
                'toplam_fiyat'       => $toplam_fiyat,
                'designs'           => $designs,
                'ladders'           => $ladders,
                'sepet_toplam_fiyat' => $sepet_toplam_fiyat,
                'lang'              => $lang,
                'sepet_toplam'      => $sepet_toplam,
                'generalModule'     => $generalModule,
                'translations'      => $translations,
            ]);
            $request->merge(compact('translations','lang','ladders','designs','connections'));
            return $next($request);
        }
    }
