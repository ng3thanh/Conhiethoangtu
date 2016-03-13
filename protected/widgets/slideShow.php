<?php

class slideShow extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = 'abc';
		$this->render("slideShow", array('data' => $data));
	}
}