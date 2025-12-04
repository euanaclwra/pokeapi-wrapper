<?php

namespace PokeAPI;

class Client {
    private $baseURL;

    public function __construct() {
        $this->baseURL = 'https://pokeapi.co/api/v2/';
    }

    public function request($url) {
        $requestURL = "{$this->baseURL}/{$url}";
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $requestURL,
            CURLOPT_RETURNTRANSFER => true,
        ]);

        $response = curl_exec($curl);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($http_code = 200) {
            return $response;
        } else {
            return 'ERROR ' . $http_code;    
        }
    }
}