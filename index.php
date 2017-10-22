<?php
//phpinfo();

function solution($N) {
    $str_binary = decbin ($N);
	$pieces = explode("1", $str_binary);
	
	
	$count = 0;
	foreach ($pieces as $value){
		if (strlen ($value)>$count){
			$count = strlen ($value);
		}
	}
	
	echo $count;
	
	
} 
solution(1041);

?>



