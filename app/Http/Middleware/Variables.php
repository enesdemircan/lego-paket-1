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

                if (Cache::has('translations_'.$lang))
                {
                    $translations = Cache::get('translations_'.$lang);
                }
                else
                {
                    if (isset($designs->ceviriler))
                    {
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

            $ladders       = $connections->LaddersDataAllList($lang);
            $generalModule = '';
            $footerModule  = '';
            $styleClass    = '';

            if (isset($designs->moduller))
            {
                foreach($designs->moduller as $modul)
                {
                    if($modul->durum == 'Aktif' and $modul->tipi == 'Genel')
                    {
                        if ($modul->view == 'header/HeaderSix')
                        {
                            $styleClass = 'style-six';
                        }

                        if ($modul->view == 'header/HeaderFour')
                        {
                            $styleClass = 'style-four';
                        }

                        if ($modul->view == 'header/HeaderOne')
                        {
                            $styleClass = 'style-one';
                        }

                        if (isset($modul->bilesenuuid))
                        {
                            $datas = $connections->DataGetAll($modul->bilesenuuid,$lang,null,null,'ASC',10000);
                        }
                        else
                        {
                            $datas = null;
                        }

                        $generalModule .= view('modules/'.$modul->view,compact('modul','datas','designs','lang','translations','ladders'))->render();
                    }
                    else if($modul->durum == 'Aktif' and $modul->tipi == 'Footer')
                    {
                        if (isset($modul->bilesenuuid))
                        {
                            $datas = $connections->DataGetAll($modul->bilesenuuid,$lang,null,null,'ASC',10000);
                        }
                        else
                        {
                            $datas = null;
                        }

                        $footerModule .= view('modules/'.$modul->view,compact('modul','datas','designs','lang','translations','ladders'))->render();
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
                'styleClass'        => $styleClass,
                'footerModule'      => $footerModule,
            ]);
            $request->merge(compact('translations','lang','ladders','designs','connections'));
            return $next($request);
        }
    }
