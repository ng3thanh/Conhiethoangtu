<?php

/**
 * This is the model class for table "tbl_news_category".
 *
 * The followings are the available columns in table 'tbl_news_category':
 * @property integer $news_category_id
 * @property string $news_category_topic
 * @property integer $status
 * @property string $datecreate
 */
class NewsCategory extends NewsCategoryBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news_category';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	static function getNewCateNo1()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "news_category_id=1";
		$data = NewsCategory::model()->findAll($criteria);
		return $data;
	}
	
	static function getNewCateNo2()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "news_category_id=2";
		$data = NewsCategory::model()->findAll($criteria);
		return $data;
	}
	
	static function getNewCateNo3()
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "news_category_id=3";
		$data = NewsCategory::model()->findAll($criteria);
		return $data;
	}
	
	static function getAllNewCate($id)
	{
		$criteria = new CDbCriteria;
		$criteria->condition = "news_category_id=".$id;
		$data = NewsCategory::model()->findAll($criteria);
		return $data;
	}
	
	
}
