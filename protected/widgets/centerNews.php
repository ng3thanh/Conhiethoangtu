<?php

class centerNews extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = NewsCategory::getNewCateNo2();
		$data2 = News::getNewsInHomepage2();
		$this->render("centerNews", array('data' => $data, 'data2'=>$data2));
	}
}