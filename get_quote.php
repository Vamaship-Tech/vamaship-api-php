<?php
require 'vendor/autoload.php';
require 'globals.php';

$token = AUTH_TOKEN;

$http = new \GuzzleHttp\Client(['headers'=>['Authorization' => 'Bearer '.$token]]);

$quote_url = API_URL.'/dom/quote';

$seller = [
	'name' => 'Dorian Gray',
	'pincode'=> '400005',
	'address' => 'abc, xyz',
	'city' => 'Mumbai',
    'state' => 'Maharashtra',
    'country' => 'India',
    'phone' => '99999999999',
    'email' => 'allwyn.lobo@vamaship.com',
];

$shipments = [
	[
		'name' => 'Mark Twain',
		'pincode'=> '302001',
		'address' => 'abc, xyz',
		'city' => 'Jaipur',
	    'state' => 'Rajasthan',
	    'country' => 'India',
	    'phone' => '88888888888',
	    'email' => 'mark.twain@wonderland.com',
	    'pickup_date' => '2015-12-20T14:15:16+05:30',
	    'weight' => '0.6',
	    'product' => 'Diary',
	    'product_value' => 100,
	    'length' => '10',
	    'breadth' => '10',
	    'height' => '10',
	    'unit'=>'cm', // cm or in   (centimeter or inch) 
	    'quantity' => 1,
	    'is_cod' => true,
	    'reference1' => '001',
	    'reference2' => 'refno1',
    ],
    [
		'name' => 'George Cloney',
		'pincode'=> '900000',
		'address' => 'abc, xyz',
		'city' => 'Jaipur',
	    'state' => 'Rajasthan',
	    'country' => 'India',
	    'phone' => '88888888888',
	    'email' => 'george.cloney@hollywood.com',
	    'pickup_date' => '2015-12-20T14:15:16+05:30',
	    'weight' => '0.6',
	    'product' => 'Diary',
	    'product_value' => 100,
	    'length' => '10',
	    'breadth' => '10',
	    'height' => '10',
	    'unit'=>'cm', // cm or in   (centimeter or inch) 
	    'quantity' => 1,
	    'is_cod' => false,
	    'reference1' => '002',
	    'reference2' => 'refno2',
    ],
];

$payload = ['seller'=>$seller,
			'shipments'=>$shipments];

// print json_encode($payload);
// exit(1);
$res = $http->request('POST', $quote_url,
		['json' => $payload]);


print $res->getBody();

