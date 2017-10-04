<?php


//phpinfo();
class Dimler {
	public static function print($obj) {
		echo "<pre>";
		print_r($obj);
		echo "</pre>";
		
	}
}
Dimler::print(
	new Class {
		public $title;
		public function __construct()
		{
			$this->title = "Hello World";
		}		
	}
);

class Container {
	private $title = "Класс Сontainer";
	protected $id = 1;
	
	public function anonym()
	{
		return new class($this->title) extends Container
		{
			private $name;
			
			public function __construct($title)
			{
				$this->name = $title;
			}
			
			public function printu()
			{
				echo "{$this->name}({$this->id})";
			}
		};
	}
	
	
}

(new Container)->anonym()->printu();

echo "трейт(trait)";

trait Compliment 
{
	public function show($data){
		
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		
	}
}

class UsingTrait 
{
	use Compliment;
	
	public $test = "test";
	
	public function let(){
	$this->show($test);
	}
}

$list = new UsingTrait();
$list->let();

?>