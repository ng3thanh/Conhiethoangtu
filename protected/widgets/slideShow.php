<?php

class slideShow extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = Slide::getSlide();
		$this->render("slideShow", array('data' => $data));
	}
}