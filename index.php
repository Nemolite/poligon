<?php
//phpinfo();
define('__ROOT__',$_SERVER['DOCUMENT_ROOT']); 

require_once(__ROOT__.'/Test.php'); 

$obj = new Test; 
$obj->set(20);
$obj->show();
//var_dump(parse_url($url));





?>