<?php
//phpinfo();

interface I 
{ 
     public function f(); 
}
class C implements I 
{ 
		public function f() {
			
		} 
}


class E 
{
	
}

function f(I $i) {
    echo get_class($i)."\n";
}

f(new C);
f(new E);















//$text = 'аоут';

//$regular_expression ='/^[аоие\ёэыуюя].*$/';

//if (preg_match($regular_expression,$text)){
//	echo "ok";
//} else {
//	echo "no";
//}


?>



