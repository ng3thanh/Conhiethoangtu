<?php

class ShopcartController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAddCart(){
		$productId = Yii::app()->request->getParam("productid");
	}
}