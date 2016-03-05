<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $u_id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $birthday
 * @property string $phone
 * @property integer $gender
 * @property string $address
 * @property integer $status
 * @property string $datecreate
 */
class User extends UserBase
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user';
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
