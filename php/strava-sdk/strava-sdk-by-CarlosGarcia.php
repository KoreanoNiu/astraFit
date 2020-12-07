<?php 
    class StravaApi
    {
        const BASE_URL = 'https://www.strava.com';
        private $apiUrl;
        protected $authUrl;
        protected $clientId;
        protected $clientSecret;

        protected function request($url, $parameters, $metodo){

            $ch = curl_init($url);

            if ($metodo == 'POST') {
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($parameters));
            }else if ($metodo == 'GET') {
                curl_setopt($ch, CURLOPT_POST, false);
            }

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

            return curl_exec($ch);
        }

        protected function parseGet($url, $query)
        {
            $append = strpos($url, '?') === false ? '?' : '&';

            return $url . $append . http_build_query($query);
        }

        public function __construct($clientId = 1, $clientSecret = '')
        {
            $this->clientId     = $clientId;
            $this->clientSecret = $clientSecret;
            $this->apiUrl       = self::BASE_URL . '/api/v3/';
            $this->authUrl      = self::BASE_URL . '/oauth/';
        }
        public function authenticationUrl($redirect, $approvalPrompt = 'auto', $scope = null, $state = null){

            $parameters = array(
                'client_id'       => $this->clientId,
                'redirect_uri'    => $redirect,
                'response_type'   => 'code',
                'approval_prompt' => $approvalPrompt,
                'state'           => $state,

            );

            if (! is_null($scope)) {
                $parameters['scope'] = $scope;
            }
            
            return $this->parseGet(
                $this->authUrl . 'authorize',
                $parameters
            );
        }
        public function obtainToken($code){

            $parameters = array(
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'code' => $code,
                'grant_type' => 'authorization_code'
            );

            $url = $this->authUrl . 'token';

            return($this->request($url, $parameters, 'POST'));
        }
        public function get($access_token, $action){

            $parameters = array(
                'access_token'       => $access_token,
            );

            $url = $this->parseGet(
                $this->apiUrl . $action, $parameters
            );

            return($this->request($url, '', 'GET'));
        }
        
    }
    