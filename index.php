<?php
echo "start";
class Test {
	protected $data=[];
	
	public function test2($in){
		$this->data[$in] = $in;
	}
	public function get(){
		if($this->data){
		print_r($this->data);
		}
		else{
			echo "NULL";
		}
	}
	
	
}

$obj = new Test();
$data_in = "inner";
$obj->test2($data_in);
$obj->get();
/**
*new
*/
echo "<br>";
class shape {
	static $stat;
	public $tmp;
	
	public function draw() {
		echo "draw";
		}
	}
	class circle extends shape {
		public function draw($radius) {
		// Проверка данных
		if ($radius > 0) {
		parent::draw();
		return true;
		}
		
		if ($radius < 0) {
		self::$stat = $radius;
		return true;
		}
		
				
	}
}
$testobj = new circle();
print_r($testobj);
echo "<br>";
$testobj2 = new circle;
print_r($testobj2);
$testobj2->draw(-2);
echo "<br>";
print_r(shape::$stat);



?>