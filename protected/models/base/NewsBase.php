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
class NewsBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('news_title, news_category_id, image, content', 'required'),
			array('news_category_id, status', 'numerical', 'integerOnly'=>true),
			array('news_title, image', 'length', 'max'=>255),
			array('description, metakey, metadescription, datecreate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('news_id, news_title, news_category_id, image, description, content, metakey, metadescription, status, datecreate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'news_id' => 'News',
			'news_title' => 'News Title',
			'news_category_id' => 'News Category',
			'image' => 'Image',
			'description' => 'Description',
			'content' => 'Content',
			'metakey' => 'Metakey',
			'metadescription' => 'Metadescription',
			'status' => 'Status',
			'datecreate' => 'Datecreate',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('news_id',$this->news_id);
		$criteria->compare('news_title',$this->news_title,true);
		$criteria->compare('news_category_id',$this->news_category_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('metakey',$this->metakey,true);
		$criteria->compare('metadescription',$this->metadescription,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('datecreate',$this->datecreate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
