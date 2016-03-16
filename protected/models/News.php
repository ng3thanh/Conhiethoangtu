<?php

/**
 * This is the model class for table "tbl_news".
 *
 * The followings are the available columns in table 'tbl_news':
 * @property integer $news_id
 * @property string $news_title
 * @property integer $news_category_id
 * @property string $image
 * @property string $description
 * @property string $content
 * @property string $metakey
 * @property string $metadescription
 * @property integer $status
 * @property string $datecreate
 */
class News extends NewsBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	static function getNewsInHomepage1(){
		$criteria = new CDbCriteria;
		$criteria->condition ="news_category_id=1";
		$criteria->limit = 2;
		$criteria->order = "datecreate DESC";
		$data = News::model()->findAll($criteria);
		return $data;
	}
	
	static function getNewsInHomepage2(){
		$criteria = new CDbCriteria;
		$criteria->condition ="news_category_id=2";
		$criteria->limit = 2;
		$criteria->order = "datecreate DESC";
		$data = News::model()->findAll($criteria);
		return $data;
	}
	
	static function getNewsInHomepage3(){
		$criteria = new CDbCriteria;
		$criteria->condition ="news_category_id=3";
		$criteria->limit = 2;
		$criteria->order = "datecreate DESC";
		$data = News::model()->findAll($criteria);
		return $data;
	}
	
	static function getNewsById($id){
		$criteria = new CDbCriteria;
		$criteria->select = "*";
		$criteria->condition ="news_category_id = ".$id;
		$criteria->order = "datecreate DESC";
		$data = News::model()->findAll($criteria);
		return $data;	
	}
	
	static function getDetailNews($id){
		$data = News::model()->findByPK($id);
		return $data;	
	}
}
