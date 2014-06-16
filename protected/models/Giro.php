<?php

/**
 * This is the model class for table "giro".
 *
 * The followings are the available columns in table 'giro':
 * @property integer $GIR_ID
 * @property integer $RUB_ID
 * @property string $GIR_CODIGO
 * @property string $GIR_NOMBRE
 *
 * The followings are the available model relations:
 * @property Rubro $rUB
 * @property Empresa[] $empresas
 */
class Giro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'giro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GIR_ID', 'required', 'message'=>'Debe seleccionar un Giro'),
			array('RUB_ID', 'numerical', 'integerOnly'=>true),
			array('GIR_CODIGO', 'length', 'max'=>10),
			array('GIR_NOMBRE', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GIR_ID, RUB_ID, GIR_CODIGO, GIR_NOMBRE', 'safe', 'on'=>'search'),
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
			'rUB' => array(self::BELONGS_TO, 'Rubro', 'RUB_ID'),
			'empresas' => array(self::MANY_MANY, 'Empresa', 'giro_empresas(GIR_ID, EMP_RUT)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GIR_ID' => 'Giro',
			'RUB_ID' => 'Rub',
			'GIR_CODIGO' => 'Gir Codigo',
			'GIR_NOMBRE' => 'Gir Nombre',
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

		$criteria->compare('GIR_ID',$this->GIR_ID);
		$criteria->compare('RUB_ID',$this->RUB_ID);
		$criteria->compare('GIR_CODIGO',$this->GIR_CODIGO,true);
		$criteria->compare('GIR_NOMBRE',$this->GIR_NOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Giro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
