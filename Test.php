<?php

class Test {
	public $val;
	
	public function __construct(){}
	
	public function set($val) {
		$this->val = $val;
	}
	
	public function show() {
		echo $this->val;
	}
}
?>