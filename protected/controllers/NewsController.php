<?php

class NewsController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionListNews($id){
		$data = NewsCategory::getAllNewCate($id);
		$data2 = News::getNewsById($id);
		$this->render("listNews", array('data' => $data, 'data2' => $data2));
	}
	
	public function actionDetailNews($id){
		$data = News::getDetailNews($id);
		$this->render("detailNews", array('data' => $data));
	}
}