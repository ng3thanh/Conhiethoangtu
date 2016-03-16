<?php

class rightCategory extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = Category::getAllCategory();
		$this->render("rightCategory", array('data' => $data));
	}
}