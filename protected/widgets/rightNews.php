<?php

class rightNews extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = NewsCategory::getNewCateNo3();
		$data2 = News::getNewsInHomepage3();
		$this->render("rightNews", array('data' => $data, 'data2'=>$data2));
	}
}