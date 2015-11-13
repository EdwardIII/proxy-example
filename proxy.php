<?php
require('vendor/autoload.php');

use Guzzle\Http\Client;

$client = new Client();

// Create a request that has a query string and an X-Foo header
$request = $client->get('http://www.example.com', [], $_GET);

// Send the request and get the response
$response = $request->send();

$headers = explode("\n", $response->getRawHeaders());
foreach($headers as $header){
    header(trim($header));
}
echo (string)$response->getBody();

