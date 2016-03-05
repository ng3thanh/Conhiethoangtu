<?php

/**
 * This is the model class for table "tbl_category".
 *
 * The followings are the available columns in table 'tbl_category':
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $status
 * @property string $datecreate
 */
class Category extends CategoryBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_category';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
