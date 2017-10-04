<?php

//phpinfo();

trait FirstTrait 
{
	public function show(){
		
		echo "trait FirstTrait ";
		
		
	}
}

class StepTrait 
{
	public function show(){
		
		echo "class StepTrait";
	}
}

class UsingTrait extends StepTrait
{
	use FirstTrait;
	
	public $test = "test";
	
	public function __construct(){
	$this->show($test);
	}
	
	public function show(){
		
		echo "class UsingTrait";
		
	}
}

$list = new UsingTrait();
//$list->let();

?>