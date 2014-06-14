<?php

/**
 * This is the model class for table "region".
 *
 * The followings are the available columns in table 'region':
 * @property integer $REG_ID
 * @property integer $PAIS_ID
 * @property string $REG_NOMBRE
 * @property string $REG_SIMBOLO
 *
 * The followings are the available model relations:
 * @property Provincia[] $provincias
 * @property Pais $pAIS
 */
class Region extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REG_ID, REG_NOMBRE, REG_SIMBOLO', 'required'),
			array('REG_ID, PAIS_ID', 'numerical', 'integerOnly'=>true),
			array('REG_NOMBRE', 'length', 'max'=>30),
			array('REG_SIMBOLO', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('REG_ID, PAIS_ID, REG_NOMBRE, REG_SIMBOLO', 'safe', 'on'=>'search'),
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
			'provincias' => array(self::HAS_MANY, 'Provincia', 'REG_ID'),
			'pAIS' => array(self::BELONGS_TO, 'Pais', 'PAIS_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'REG_ID' => 'Región',
			'PAIS_ID' => 'País',
			'REG_NOMBRE' => 'Nombre Región',
			'REG_SIMBOLO' => 'Símbolo',
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

		$criteria->compare('REG_ID',$this->REG_ID);
		$criteria->compare('PAIS_ID',$this->PAIS_ID);
		$criteria->compare('REG_NOMBRE',$this->REG_NOMBRE,true);
		$criteria->compare('REG_SIMBOLO',$this->REG_SIMBOLO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
