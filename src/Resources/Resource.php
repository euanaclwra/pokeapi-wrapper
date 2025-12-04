<?php

namespace PokeAPI\Resources;

use PokeAPI\Client;

class Resource {
    public Client $client;
    protected String $endpoint;

    public function __construct($client) {
        $client = new Client();
        $this->client = $client;
    }

    public function getByName($name) {
        $URL = "/{$this->endpoint}/{$name}";
        $response = $this->client->request($URL);
        return $response;
    }

    public function getById($id) {
        $URL = "/{$this->endpoint}/{$id}";
        $response = $this->client->request($URL);
        return $response;        
    }
}