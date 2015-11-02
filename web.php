<?php
//include library file :)
require_once 'lib/nusoap.php';

//create abject from nusoap
$server= new nusoap_server();

///config WSDL file
$server->configureWSDL('new wsdl','http://localhost:81/test');

//register  function and set value type
$server->register('myFunction',
    array('value'=>'xsd:string'),///input
    array('result'=>'xsd:string'), ///out put
    'http://localhost:81/test'//name space

);
///create function
function myFunction($value)
{
    $result=$value;
    return $result;
}

// create HTTP listener
$HTTP_RAW_POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';
$server->service($HTTP_RAW_POST_DATA);
exit();
?>
