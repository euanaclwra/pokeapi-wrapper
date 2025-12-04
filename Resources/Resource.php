<?php
require_once __DIR__ . '../Client.php';

class Resource {
    protected Client $client;
    protected $endpoint;

    public function __construct($client) {
        $client = new Client();
        $this->client = $client;
    }

    public function getByName($name) {
        $URL = $client->baseURL . $this->endpoint . $name;
    }

    public function getById($id) {
        $URL = $client->baseURL . $this->endpoint . $id;
    }
}