<?php
require 'vendor/autoload.php';
require 'globals.php';

$token = AUTH_TOKEN;
$http = new \GuzzleHttp\Client(['headers'=>['Authorization' => 'Bearer '.$token]]);

$response = $http->request('GET', sprintf('%s/details/AP00000004707', API_URL));
print sprintf('%s/details/AP00000004707', API_URL);

print($response->getBody());

/*

Polling API
-Request url (Requires authorization, refer to the API docs shared)
GET http://tech197.vamaship.com/api/details/REFID

eg. http://tech197.vamaship.com/api/details/AP00000000149

-Sample response when shipment is not ready
{"status_code":300,"info":"Shipment is being processed"}

-Sample response when shipment is ready
{"refid":"AP00000000149","documents":{"invoices":["http:\/\/tech197.vamaship.com\/api\/download\/BU00000000149\/Vamaship-Invoice-BU00000000149.pdf"],"labels":["http:\/\/tech197.vamaship.com\/api\/download\/BU00000000149\/Vamaship-Label-BU00000000149_7.pdf"],"manifests":["http:\/\/tech197.vamaship.com\/api\/download\/BU00000000149\/Vamaship-Manifest-BU00000000149_7.pdf"]},"shipments":[{"order_id":100005399,"supplier_id":7,"reference1":"001","reference2":"refno1","tracking_id":"511910011992"},{"order_id":100005400,"supplier_id":7,"reference1":"002","reference2":"refno2","tracking_id":"511910012003"}],"status_code":200}
*/