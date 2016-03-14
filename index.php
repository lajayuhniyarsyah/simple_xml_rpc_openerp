<?php

require_once __DIR__.'/vendor/autoload.php';

use PhpXmlRpc\Value;
use PhpXmlRpc\Request;
use PhpXmlRpc\Client;


echo 'Calll XML RPC ----';


$client = new Client('http://10.36.15.13:8069/xmlrpc/common');

$response = $client->send(
	new Request('login', array(new Value('LIVE_2016_01_17'),new Value('novri'),new Value('novri')))
);

$client2 = new Client('http://10.36.15.13:8069/xmlrpc/object');

$params = array(
	new Value('LIVE_2016_01_17','string'),
	new Value('129','int'),
	new Value('novri','string'),
	new Value('res.partner','string'),
	new Value('read','string'),
	new Value('5626','int'),
	[new Value('name','string'),new Value('address','string'),]

);
var_dump($params);
$response2 = $client2->send(
	new Request('execute', $params)
);


var_dump($response);


var_dump($response2);

 ?>