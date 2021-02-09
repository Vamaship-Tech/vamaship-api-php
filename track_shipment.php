<?php
require 'vendor/autoload.php';
require 'globals.php';

$token = AUTH_TOKEN;
$http = new \GuzzleHttp\Client(['headers'=>['Authorization' => 'Bearer '.$token]]);

$request_url = API_URL.'/track/100005263';

$res = $http->request('GET', $request_url);

print $res->getBody();
