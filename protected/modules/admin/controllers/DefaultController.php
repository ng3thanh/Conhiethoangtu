<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function filters() {
 		return array(
 		'accessControl', 
 		'postOnly + delete',
 		);
 	}

	 public function accessRules() {
		 return array(
			 array('allow', 
			 'actions' => array('create', 'update', 'index', 'view'),
			 'users' => array('@'),
		 	),
			 array('allow', 
			 'actions' => array('admin', 'delete'),
			 'users' => array('admin'),
			 ),
			 array('deny', 
			 'users' => array('*'),
			 ),
	 	);
	 }
}