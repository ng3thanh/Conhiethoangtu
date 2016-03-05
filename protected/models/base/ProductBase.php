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
class ProductBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_name, cat_id, price, image, content', 'required'),
			array('cat_id, status', 'numerical', 'integerOnly'=>true),
			array('pro_name, image, image2, image3', 'length', 'max'=>255),
			array('price', 'length', 'max'=>50),
			array('description, metakey, metadescription, datecreate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_id, pro_name, cat_id, price, image, image2, image3, description, content, metakey, metadescription, status, datecreate', 'safe', 'on'=>'search'),
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
			'pro_id' => 'Pro',
			'pro_name' => 'Pro Name',
			'cat_id' => 'Cat',
			'price' => 'Price',
			'image' => 'Image',
			'image2' => 'Image2',
			'image3' => 'Image3',
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

		$criteria->compare('pro_id',$this->pro_id);
		$criteria->compare('pro_name',$this->pro_name,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('image2',$this->image2,true);
		$criteria->compare('image3',$this->image3,true);
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
	 * @return ProductBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
