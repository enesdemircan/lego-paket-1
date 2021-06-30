<?php

    namespace App;
    use Curl\Curl;
    use Illuminate\Support\Facades\Mail;

    class Connections {

        protected $token;
        protected $curl;
        protected $AppSecret;
        public function __construct()
        {
            $this->curl = new Curl();
            $this->AppSecret = env('APP_UUID','0');
            $this->login();

            $lang          = config('app.locale');
            /*
            $host          = $this->DesignComponentList($lang)->mail_yonetimi;
            $site_ayarlari = $this->DesignComponentList($lang)->site_ayarlari;
            $existing      = config('mail');
            $new = array_merge(
                $existing, [
                'host' => $host->smtp_sunucu,
                'port' => $host->smtp_port,
                'from' => [
                    'address' => $host->email,
                    'name' => $site_ayarlari->title,
                ],
                'encryption' => $host->smtp_encryption,
                'username' => $host->email,
                'password' => $host->sifre,
            ]);

            config(['mail'=>$new]);
            */
        }

        public function login(){
            if (!isset($_COOKIE['Token'])) {
                $this->curl->post(env('SERVER_ADDRESS', 'localhost') . '/api/auth/login', array(
                    'email' => env('DEVELOPER_USERNAME', 'root'),
                    'password' => env('DEVELOPER_PASSWORD', 'root'),
                ));
                if ($this->curl->error) {
                    return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
                } else {
                    $this->token = $this->curl->response->access_token;
                    setcookie("Token", $this->token, time() + 3600);
                    return $this->curl->response;
                }
            }else{
                $this->token = $_COOKIE['Token'];
            }
        }

        public function DataInsert($componentId,$lang,$request){

            $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/insert/'.$componentId.'/'.$lang.'?token='.$this->token;
            $this->curl->post($url,$request);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {
                return $this->curl->response;
            }
        }

        public function DataUpdate($recordId,$lang,$request){
            $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/update/'.$recordId.'/'.$lang.'/?token='.$this->token;
            $this->curl->post($url,$request);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {
                return $this->curl->response;
            }
        }

        public function DataGetAll($componentId,$lang,$where = null,$filterOrder = null,$filterLimit = null){
            $url  = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/list/'.$componentId.'/'.$lang.'/?token='.$this->token;
            $url .= "&filterOrder=".$filterOrder;
            $url .= "&filterLimit=".$filterLimit;

            if ($where != null) {
                foreach ($where as $xwe){
                    $url .= "&where[]=".$xwe;
                }
            }

            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {
                return $this->curl->response;
            }
        }

        public function DataGetSingle($selectorType,$recordSelectorValue,$lang){
            if ($selectorType == 'slug'){
                $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/slug/'.$recordSelectorValue.'/'.$lang.'/?token='.$this->token;

            }else if($selectorType == 'uuid'){
                $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/single/'.$recordSelectorValue.'/'.$lang.'/?token='.$this->token;
            }else{
                return 'Error: Seçim türünü doğru belirtin!';
            }
            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return json_decode($this->curl->response);
                }


            }
        }

        public function DataDelete($recordId,$lang){
            $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/delete/'.$recordId.'/'.$lang.'/?token='.$this->token;
            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {
                return $this->curl->response;
            }
        }

        public function LadderGetAll($lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersList/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);

            if ($this->curl->error) {

                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";

            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return json_decode($this->curl->response);
                }

            }

        }

        public function LaddersDataList($selectorType,$recordSelectorValue,$lang){
            if ($selectorType == 'slug'){
                $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersDataList/slug/'.$recordSelectorValue.'/'.$lang.'/?token='.$this->token;

            }else if($selectorType == 'uuid'){
                $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersDataList/uuid/'.$recordSelectorValue.'/'.$lang.'/?token='.$this->token;

            }else{
                return 'Error: Seçim türünü doğru belirtin!';
            }
            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return json_decode($this->curl->response);
                }


            }
        }

        public function LaddersSlugSingle($slug,$lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersDataSlug/'.$slug.'/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);

            if ($this->curl->error) {

                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";

            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return json_decode($this->curl->response);
                }

            }

        }

        public function ComponentSlugSingle($slug,$lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/componentSlugSingle/'.$slug.'/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return $this->curl->response;
                }


            }
        }

        public function DesignComponentList($lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/application/'.$this->AppSecret.'/designComponentList/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return $this->curl->response;
                }


            }
        }

        public function LaddersDataAllList($lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersDataAllList/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return $this->curl->response;
                }


            }
        }

        public function LaddersAndDataAllList($slug,$lang){

            $url = env('SERVER_ADDRESS','localhost').'/api/ladders/'.$this->AppSecret.'/laddersAndDataAllList/'.$slug.'/'.$lang.'/?token='.$this->token;

            $this->curl->get($url);
            if ($this->curl->error) {
                return 'Error: ' . $this->curl->errorCode . ': ' . $this->curl->errorMessage . "\n";
            } else {

                if (isset($this->curl->response->status)) {
                    return $this->curl->response;
                }else{
                    return $this->curl->response;
                }


            }
        }

        public function SendMail($mail,$subject,$variables,$status)
        {
            // status == 1 order, status == 2 form elements
            $variables['status'] = $status;
            Mail::send('mail.mail', $variables, function($message) use ($mail,$subject)
            {
                $message->to($mail)->subject($subject);
            });
        }
    }


