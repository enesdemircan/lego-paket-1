<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Connections;

    class MasterController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct(Request $request)
        {
            $this->middleware('Variables');
            $this->lang         = $request->get('lang');
            $this->translations = $request->get('translations');
            $this->ladders      = $request->get('ladders');
            $this->designs      = $request->get('designs');
            $this->connections  = $request->get('connections');
        }

        public function index()
        {
            $html      = null;

            if (empty($this->designs->moduller))
            {
                //return view('theme.sayfa_bulunamadi');
                return  'modül yok.';
            }

            foreach($this->designs->moduller as $key => $modul)
            {
                if($modul->durum == 'Aktif' and $modul->tipi == 'Anasayfa')
                {

                    $datas = $this->connections->DataGetAll($modul->bilesenuuid,$this->lang,null,'ASC');
                    $html .= view('modules.'.$modul->view,compact('modul','datas'))->render();
                }
            }

            return view('theme.index',compact('html'));
        }
    }
