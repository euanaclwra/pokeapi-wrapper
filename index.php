<?php
require_once 'vendor/autoload.php';

use PokeAPI\Client;
use PokeAPI\Resources\Pokemon;

$client = new Client();
$pokemon = new Pokemon($client);

$responseJSON = $pokemon->getByName('pikachu');
$response = json_decode($responseJSON);

echo "<pre>";
echo var_dump($response);
echo "</pre>";
