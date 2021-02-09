<?php
require 'vendor/autoload.php';
require 'globals.php';

$token = AUTH_TOKEN;

$http = new \GuzzleHttp\Client(['headers'=>['Authorization' => 'Bearer '.$token]]);

$info_url = API_URL.'/dom/coverage';

$data = ['type' => 'prepaid', 'origin'=>110048];
// $data = ['type' => 'reverse'];
// $data = ['type' => 'prepaid'];

$res = $http->request('POST', $info_url, ['json' => $data]);

print $res->getBody();