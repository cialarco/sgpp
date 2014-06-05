<?php

/**
 * This is the model class for table "tipo_practica".
 *
 * The followings are the available columns in table 'tipo_practica':
 * @property integer $TPP_ID
 * @property integer $TPP_CODIGO
 * @property integer $CAR_ID
 * @property string $TTP_NOMBRE
 *
 * The followings are the available model relations:
 * @property DestinoEventos[] $destinoEventoses
 * @property OfertaPractica[] $ofertaPracticas
 * @property Carrera $cAR
 */
class TipoPractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipo_practica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TPP_CODIGO,CAR_ID, TTP_NOMBRE', 'required'),
			array('TPP_CODIGO, CAR_ID', 'numerical', 'integerOnly'=>true),
			array('TTP_NOMBRE', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TPP_ID, TPP_CODIGO, CAR_ID, TTP_NOMBRE', 'safe', 'on'=>'search'),
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
			'destinoEventoses' => array(self::HAS_MANY, 'DestinoEventos', 'TPP_ID'),
			'ofertaPracticas' => array(self::HAS_MANY, 'OfertaPractica', 'TPP_ID'),
			'cAR' => array(self::BELONGS_TO, 'Carrera', 'CAR_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TPP_ID' => 'ID',
			'TPP_CODIGO' => 'Codigo Práctica',
			'CAR_ID' => 'Codigo Carrera',
			'TTP_NOMBRE' => 'Nombre',
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

		$criteria->compare('TPP_ID',$this->TPP_ID);
		$criteria->compare('TPP_CODIGO',$this->TPP_CODIGO);
		$criteria->compare('CAR_ID',$this->CAR_ID);
		$criteria->compare('TTP_NOMBRE',$this->TTP_NOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoPractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
