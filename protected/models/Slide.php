<?php

/**
 * This is the model class for table "tbl_slide".
 *
 * The followings are the available columns in table 'tbl_slide':
 * @property integer $slide_id
 * @property string $slide_link
 * @property string $slide_image
 * @property integer $status
 * @property integer $slide_ordinal
 */
class Slide extends SlideBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_slide';
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	static function getSlide(){
		$criteria = new CDbCriteria;
		$criteria->condition = "status = 2";
		$criteria->order = "slide_ordinal ASC";
		$data = Slide::model()->findAll($criteria);
		return $data;
	}
}
