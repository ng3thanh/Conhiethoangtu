<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $pro_id
 * @property string $pro_name
 * @property integer $cat_id
 * @property string $price
 * @property string $image
 * @property string $image2
 * @property string $image3
 * @property string $description
 * @property string $content
 * @property string $metakey
 * @property string $metadescription
 * @property integer $status
 * @property string $datecreate
 */
class Product extends ProductBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_product';
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	static function getProductHomepage(){
		$criteria = new CDbCriteria;
		$criteria->limit = 12;
		$data = Product::model()->findAll($criteria);
		return $data;
	}
	
	static function getNumberProduct($id){
		$criteria = new CDbCriteria;
		$criteria->select = "*";
		$criteria->condition = "cat_id = ".$id;
		$data = Product::model()->count($criteria);
		return $data;	
	}
	
	static function getProductByID($id, $page = 0, $apage = 0){
		$criteria = new CDbCriteria;
		$criteria->select = "*";
		$criteria->condition = "cat_id = ".$id;
		$criteria->offset = ($page * $apage);
		$criteria->limit = $apage;
		$data = Product::model()->findAll($criteria);
		return $data;
	}
	
	static function getDetailProduct($id){
		$data = Product::model()->findByPK($id);
		return $data;
	}
	
	public function searchByKey($searchkey){
		$criteria = new CDbCriteria;
		$criteria->select = "*";
		$criteria->condition = "pro_name LIKE '%$searchkey%'";
		$data = Product::model()->findAll($criteria);
		return $data;
	}	
}
