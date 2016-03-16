<?php

class ProductController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionListProduct($id)
	{
		
		$param = Yii::app()->request->getParam('page');
		$page = (isset($param) ? $param - 1 : 0);
				
		$count = Product::getNumberProduct($id);
		$pages = new CPagination($count);
		$apage = Yii::app()->params['pager'];
		$pages->setPageSize($apage);
		
		
		$data = Product::getProductByID($id,$page,$apage); 
		$this->render("listProduct", array(
			'data' => $data,
			'page_size' => $apage,
			'pages' => $pages,
			'item_count' => $count,
		));
	}
	
	public function actionDetail($id){
		$data = Product::getDetailProduct($id);
		$this->render("detail", array('data' => $data));
	}
	
	
}