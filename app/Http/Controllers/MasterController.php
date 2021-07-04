<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Connections;
    use Illuminate\Support\Facades\Validator;

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

        public function Index()
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

                    $datas = $this->connections->DataGetAll($modul->bilesenuuid,$this->lang,null,null,'ASC',$modul->limit);
                    $html .= view('modules.'.$modul->view,compact('modul','datas'))->render();
                }
            }

            return view('theme.index',compact('html'));
        }

        public function Paginate($lang,$component_slug,$PageNumber)
        {

            $connections    = new Connections();
            $component_info = $connections->ComponentSlugSingle($component_slug,$lang);

            $multiple = $connections->DataGetAll($component_info->uuid,$lang,null,null,'DESC',null,$this->designs->site_ayarlari->sayfa_gosterim_sayisi,$PageNumber);
            $view     = '/theme/'.$component_info->data_type.'/list/'.$component_info->view;

            if (view()->exists($view)) {
                return view($view,compact('lang','multiple','PageNumber'));
            }else{
                if (env('DEVELOPER_MODE','true') == true){
                    return 'View Katmanında Dosya Oluşturulmamış!';
                }else{
                    return view('theme.sayfa_bulunamadi');
                }
            }

        }

        public function Single($lang,$component_slug)
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
                    $multiple  = $ladderData->datas;
                    $component = $ladderData->component;
                    $ladder    = $ladderData->ladder;

                    $view = '/theme/categories/'.$ladderData->component->view;
                }

            }else{

                if ($component_info->data_type == 'single'){
                    //$single = $connections->DataGetAll($component_info->uuid,$lang)[0];

                    $single = $connections->DataGetSingle('slug',$component_info->slug,$lang);
                    $view = '/theme/'.$component_info->data_type.'/'.$component_info->view;
                }else{

                    $multiple = $connections->DataGetAll($component_info->uuid,$lang,null,null,'DESC',null,$this->designs->site_ayarlari->sayfa_gosterim_sayisi,1);
                    $view     = '/theme/'.$component_info->data_type.'/list/'.$component_info->view;
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

        public function Multiple($lang,$component_slug,$data_slug)
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




            if ($single->component->uuid != $component_info->uuid)
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

            $view     = 'theme/multiple/detail/'.$single->component->view;
            $multiple = $connections->DataGetAll($single->component->uuid,$lang,null,null,'DESC',100,null);

            if (empty($single->component->view))
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
                if ($component_info->uuid == '69e1ffcb-79e2-407c-a0ab-cde87c701a4b')
                {
                    $where[]      = 'kategori,=,'.$single->data->dynamic->kategori;
                    $where[]      = 'durum,=,Aktif';
                    $where[]      = 'slug,!=,'.$single->data->dynamic->slug;
                    $otherProduct = $connections->DataGetAll($single->component->uuid,$lang,$where,null,'DESC',6);
                }

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

        public function SubmitForm(Request $request)
        {
            $connections = new Connections();

            $attr  = array(
                'isim'                 => $this->translations['ad_soyad'],
                'email'                => $this->translations['email'],
                'telefon'              => $this->translations['telefon'],
                'mesaj' 	           => $this->translations['mesaj'],
                //'g-recaptcha-response' => 'Captcha',
                'link' 			       => 'Link',
            );
            $rules = array(
                'isim'                 => 'string',
                'email'                => 'required|email',
                'telefon'              => 'required',
                'mesaj'                => 'required',
                'link'                 => 'required',
                //'g-recaptcha-response' => 'required'
            );
            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($attr);

            if ($validator->fails())
            {
                return response()->json(['error' => $validator->errors()->all()], 401);
            }

            $gelen_veri = $request->all();
            $insert     = $connections->DataInsert('475f9997-c1bf-43ca-a1c9-cb3de7e103b5',$this->lang,$gelen_veri);

            if ($insert->status == 1)
            {
                $subject    = $gelen_veri['link'].'  '.$this->translations['form_gonderildi'];
                $alici_mail = $connections->DesignComponentList($this->lang)->mail_yonetimi->alici_mail;
                $connections->SendMail($gelen_veri['email'],$subject,$gelen_veri,2);
                $connections->SendMail($alici_mail,$subject,$gelen_veri,2);
                return response()->json(['success',$this->translations['form_gonderildi'],$this->translations['kapat']]);
            }

            return $insert;
        }
    }
