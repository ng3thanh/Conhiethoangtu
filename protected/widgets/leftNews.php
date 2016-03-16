<?php

class leftNews extends CWidget {
	
	public function init(){
		
	}
	
	public function run(){
		$data = NewsCategory::getNewCateNo1();
		$data2 = News::getNewsInHomepage1();
		$this->render("leftNews", array('data' => $data, 'data2'=>$data2));
	}
}