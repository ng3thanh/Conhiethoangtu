<?php

class SearchController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionListSearch($keyword){
		$searchkey = addslashes($_GET['keyword']);
		$data = Product::searchByKey($searchkey);
		$this->render("detailSearch", array('data' => $data));
	}
}