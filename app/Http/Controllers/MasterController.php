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


        public function single($lang,$component_slug)
        {
            $component      = null;
            $single         = null;
            $multiple       = null;
            $ladder         = null;
            $connections    = new Connections();
            $component_info = $connections->ComponentSlugSingle($component_slug,$lang);

            if (isset($component_info->status)){
                $ladderData = $connections->LaddersAndDataAllList($component_slug,$lang);

                if (isset($ladderData->status)){
                    if (env('DEVELOPER_MODE','true') == true){
                        return 'Kategori Slug Değeriyle Eşleşen veri Bulunamadı!';
                    }else{
                        return view('theme.sayfa_bulunamadi');
                    }
                }else{
                    $multiple = $ladderData->datas;
                    $component = $ladderData->component;
                    $ladder = $ladderData->ladder;

                    $view = '/theme/categories/'.$ladderData->component->view;
                }

            }else{

                if ($component_info->data_type == 'single'){

                    $single = $connections->DataGetAll($component_info->uuid,$lang)[0];
                    //$single = $connections->DataGetSingle('uuid',$component_info->uuid,$lang);

                    $view = '/theme/'.$component_info->data_type.'/'.$component_info->component_view;
                }else{
                    $multiple = $connections->DataGetAll($component_info->uuid,$lang,null,'DESC');
                    $view = '/theme/'.$component_info->data_type.'/list/'.$component_info->component_view;
                }

            }

            if (view()->exists($view)) {
                return view($view,compact('lang','ladder','multiple','single','component'));
            }else{
                if (env('DEVELOPER_MODE','true') == true){
                    return 'View Katmanında Dosya Oluşturulmamış!';
                }else{
                    return view('theme.sayfa_bulunamadi');
                }
            }

        }

        public function multiple($lang,$component_slug,$data_slug)
        {


            $connections  = new Connections();
            $single       = $connections->DataGetSingle("slug",$data_slug,$lang);
            $otherProduct = null;

            if (!empty($single->status))
            {
                if (env('DEVELOPER_MODE','true') == true)
                {
                    return 'Bu slug belirtecine ait veri bulunamadı!';
                }
                else
                {
                    return view('theme.sayfa_bulunamadi');
                }
            }

            $component_info = $connections->ComponentSlugSingle($component_slug,$lang);

            if (isset($component_info->status))
            {
                if (env('DEVELOPER_MODE','true') == true)
                {
                    return 'Component Slug Verisine Ait Slug Yok!';
                }
                else
                {
                    return view('theme.sayfa_bulunamadi');
                }
            }

            if ($component_info->uuid == '69e1ffcb-79e2-407c-a0ab-cde87c701a4b')
            {
                $where[]      = 'data_json->kategori,=,'.$single->kategori;
                $where[]      = 'data_json->durum,=,Aktif';
                $where[]      = 'slug,!=,'.$single->slug;
                $otherProduct = $connections->DataGetAll($single->component_uuid,$lang,$where,'DESC',6);
            }


            if ($single->component_uuid != $component_info->uuid)
            {
                if (env('DEVELOPER_MODE','true') == true)
                {
                    return 'Component ile data eşleşemedi!';
                }
                else
                {
                    return view('theme.sayfa_bulunamadi');
                }
            }

            $view     = 'theme/multiple/detail/'.$single->component_view;
            $multiple = $connections->DataGetAll($single->component_uuid,$lang,null,'DESC');

            if (empty($single->component_view))
            {
                if (env('DEVELOPER_MODE','true') == true)
                {
                    return 'Component ile data eşleşemedi!';
                }
                else
                {
                    return view('theme.sayfa_bulunamadi');
                }
            }

            if (view()->exists($view))
            {

                return view($view,compact('lang','single','multiple','otherProduct','component_info','component_slug'));
            }
            else
            {
                if (env('DEVELOPER_MODE','true') == true)
                {
                    return 'View Katmanında Dosya Oluşturulmamış!';
                }
                else
                {
                    return view('theme.sayfa_bulunamadi');
                }
            }
        }
    }
