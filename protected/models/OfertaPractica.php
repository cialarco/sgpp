<?php

/**
 * This is the model class for table "oferta_practica".
 *
 * The followings are the available columns in table 'oferta_practica':
 * @property integer $OFE_ID
 * @property string $EMP_RUT
 * @property integer $SUP_ID
 * @property string $COO_RUT
 * @property integer $TPP_ID
 * @property string $OFE_NOMBRE
 * @property string $OFE_DESCRIPCION
 * @property string $OFE_ESTADO
 * @property integer $OFE_CUPOS
 * @property string $OFE_FECHA_PUBLICACION
 * @property string $OFE_FECHA_CADUCA
 * @property string $OFE_TAREAS
 * @property string $OFE_AREA_TRABAJO
 *
 * The followings are the available model relations:
 * @property Bitacora[] $bitacoras
 * @property Empresa $eMPRUT
 * @property Supervisor $sUP
 * @property Coordinador $cOORUT
 * @property TipoPractica $tPP
 * @property Practica[] $practicas
 */
class OfertaPractica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oferta_practica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SUP_ID, TPP_ID, OFE_CUPOS', 'numerical', 'integerOnly'=>true),
			array('EMP_RUT', 'length', 'max'=>13),
			array('COO_RUT', 'length', 'max'=>12),
			array('OFE_NOMBRE, OFE_AREA_TRABAJO', 'length', 'max'=>50),
			array('OFE_ESTADO', 'length', 'max'=>20),
			array('OFE_DESCRIPCION, OFE_FECHA_PUBLICACION, OFE_FECHA_CADUCA, OFE_TAREAS', 'safe'),
			array('OFE_FECHA_CADUCA','compare','compareAttribute'=>'OFE_FECHA_PUBLICACION','operator'=>'>=','message'=>'Fecha de Término debe ser superior a Fecha de Inicio'),
			array('EMP_RUT, SUP_ID, COO_RUT, TPP_ID, OFE_NOMBRE, OFE_DESCRIPCION, OFE_ESTADO, OFE_CUPOS, OFE_FECHA_PUBLICACION, OFE_FECHA_CADUCA, OFE_TAREAS, OFE_AREA_TRABAJO', 'required','message'=>'El campo <b>{attribute}</b> es obligatorio.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('OFE_ID, EMP_RUT, SUP_ID, COO_RUT, TPP_ID, OFE_NOMBRE, OFE_DESCRIPCION, OFE_ESTADO, OFE_CUPOS, OFE_FECHA_PUBLICACION, OFE_FECHA_CADUCA, OFE_TAREAS, OFE_AREA_TRABAJO', 'safe', 'on'=>'search'),
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
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'OFE_ID'),
			'eMPRUT' => array(self::BELONGS_TO, 'Empresa', 'EMP_RUT'),
			'sUP' => array(self::BELONGS_TO, 'Supervisor', 'SUP_ID'),
			'cOORUT' => array(self::BELONGS_TO, 'Coordinador', 'COO_RUT'),
			'tPP' => array(self::BELONGS_TO, 'TipoPractica', 'TPP_ID'),
			'practicas' => array(self::HAS_MANY, 'Practica', 'OFE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'OFE_ID' => 'Código Oferta',
			'EMP_RUT' => 'Rut Empresa',
			'SUP_ID' => 'Rut Supervisor',
			'COO_RUT' => 'Rut Coordinador',
			'TPP_ID' => 'Tipo de Práctica',
			'OFE_NOMBRE' => 'Título ',
			'OFE_DESCRIPCION' => 'Descripción',
			'OFE_ESTADO' => 'Estado',
			'OFE_CUPOS' => 'Cupos',
			'OFE_FECHA_PUBLICACION' => 'Fecha Publicación',
			'OFE_FECHA_CADUCA' => 'Fecha Caducación',
			'OFE_TAREAS' => 'Tareas',
			'OFE_AREA_TRABAJO' => 'Área de Trabajo',
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

		$criteria->compare('OFE_ID',$this->OFE_ID);
		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('SUP_ID',$this->SUP_ID);
		$criteria->compare('COO_RUT',$this->COO_RUT,true);
		$criteria->compare('TPP_ID',$this->TPP_ID);
		$criteria->compare('OFE_NOMBRE',$this->OFE_NOMBRE,true);
		$criteria->compare('OFE_DESCRIPCION',$this->OFE_DESCRIPCION,true);
		$criteria->compare('OFE_ESTADO',$this->OFE_ESTADO,true);
		$criteria->compare('OFE_CUPOS',$this->OFE_CUPOS);
		$criteria->compare('OFE_FECHA_PUBLICACION',$this->OFE_FECHA_PUBLICACION,true);
		$criteria->compare('OFE_FECHA_CADUCA',$this->OFE_FECHA_CADUCA,true);
		$criteria->compare('OFE_TAREAS',$this->OFE_TAREAS,true);
		$criteria->compare('OFE_AREA_TRABAJO',$this->OFE_AREA_TRABAJO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OfertaPractica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
