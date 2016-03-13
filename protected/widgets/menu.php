<?php

class menu extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = Category::getAllCategory();
		$this->render("menu", array('data' => $data));
	}
}