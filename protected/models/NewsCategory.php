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
	
	static function getAllNewCate()
	{
		$data = NewsCategory::model()->findAll();
		return $data;
	}
}
