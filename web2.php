<?php
require_once ('lib/nusoap.php');

$client=new nusoap_client('http://localhost:81/test/web.php?wsdl',false);

$result=$client->call('myFunction',array('value'=>'adffbc'));
var_dump($result);



?>
