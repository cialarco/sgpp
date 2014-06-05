<?php

/**
 * This is the model class for table "eventos".
 *
 * The followings are the available columns in table 'eventos':
 * @property integer $EVE_ID
 * @property string $EVE_NOMBRE
 * @property string $EVE_DESCRIPCION
 * @property string $EVE_FECHA_PUBLICACION
 * @property string $EVE_FECHA_CADUCA
 * @property string $EVE_HORA
 * @property string $EVE_ESTADO
 *
 * The followings are the available model relations:
 * @property DestinoEventos[] $destinoEventoses
 */
class Eventos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eventos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EVE_NOMBRE', 'length', 'max'=>50),
			array('EVE_ESTADO', 'length', 'max'=>20),
			array('EVE_DESCRIPCION, EVE_FECHA_PUBLICACION, EVE_FECHA_CADUCA, EVE_HORA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EVE_ID, EVE_NOMBRE, EVE_DESCRIPCION, EVE_FECHA_PUBLICACION, EVE_FECHA_CADUCA, EVE_HORA, EVE_ESTADO', 'safe', 'on'=>'search'),
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
			'destinoEventoses' => array(self::HAS_MANY, 'DestinoEventos', 'EVE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EVE_ID' => 'Eve',
			'EVE_NOMBRE' => 'Eve Nombre',
			'EVE_DESCRIPCION' => 'Eve Descripcion',
			'EVE_FECHA_PUBLICACION' => 'Eve Fecha Publicacion',
			'EVE_FECHA_CADUCA' => 'Eve Fecha Caduca',
			'EVE_HORA' => 'Eve Hora',
			'EVE_ESTADO' => 'Eve Estado',
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

		$criteria->compare('EVE_ID',$this->EVE_ID);
		$criteria->compare('EVE_NOMBRE',$this->EVE_NOMBRE,true);
		$criteria->compare('EVE_DESCRIPCION',$this->EVE_DESCRIPCION,true);
		$criteria->compare('EVE_FECHA_PUBLICACION',$this->EVE_FECHA_PUBLICACION,true);
		$criteria->compare('EVE_FECHA_CADUCA',$this->EVE_FECHA_CADUCA,true);
		$criteria->compare('EVE_HORA',$this->EVE_HORA,true);
		$criteria->compare('EVE_ESTADO',$this->EVE_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Eventos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
