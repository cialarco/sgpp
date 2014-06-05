<?php

/**
 * This is the model class for table "bitacora".
 *
 * The followings are the available columns in table 'bitacora':
 * @property integer $BIT_ID
 * @property string $BIT_FECHA
 * @property string $ALU_RUT
 * @property integer $OFE_ID
 * @property string $BIT_HORA
 * @property string $BIT_DESCRIPCION
 *
 * The followings are the available model relations:
 * @property Alumno $aLURUT
 * @property OfertaPractica $oFE
 */
class Bitacora extends CActiveRecord
{
	public $ALU_NOMBRES;
	public $ALU_APELLIDO_P;
	public $ALU_APELLIDO_M;
	public $EMP_RUT;
	public $SUP_RUT;


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bitacora';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BIT_FECHA, ALU_RUT, OFE_ID', 'required'),
			array('OFE_ID', 'numerical', 'integerOnly'=>true),
			array('ALU_RUT', 'length', 'max'=>12),
			array('BIT_HORA, BIT_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BIT_ID, BIT_FECHA, ALU_RUT, OFE_ID, BIT_HORA, BIT_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'aLURUT' => array(self::BELONGS_TO, 'Alumno', 'ALU_RUT'),
			'oFE' => array(self::BELONGS_TO, 'OfertaPractica', 'OFE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BIT_ID' => 'Bit',
			'BIT_FECHA' => 'Bit Fecha',
			'ALU_RUT' => 'Alu Rut',
			'OFE_ID' => 'Ofe',
			'BIT_HORA' => 'Bit Hora',
			'BIT_DESCRIPCION' => 'Bit Descripcion',
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

		$criteria->compare('BIT_ID',$this->BIT_ID);
		$criteria->compare('BIT_FECHA',$this->BIT_FECHA,true);
		$criteria->compare('ALU_RUT',$this->ALU_RUT,true);
		$criteria->compare('OFE_ID',$this->OFE_ID);
		$criteria->compare('BIT_HORA',$this->BIT_HORA,true);
		$criteria->compare('BIT_DESCRIPCION',$this->BIT_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bitacora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function listadoCordinador(){

		$respuesta = new CDbCriteria();
		$respuesta->select= 't.BIT_ID, t.BIT_FECHA, al.ALU_RUT, al.ALU_NOMBRES, al.ALU_APELLIDO_P, al.ALU_APELLIDO_M, 
		t.BIT_DESCRIPCION';
		$respuesta->join='INNER JOIN ALUMNO al ON al.ALU_RUT = t.ALU_RUT';



		return new CActiveDataProvider($this,array(
           'criteria'=>$respuesta,
           //'pagination'=>array('pageSize'=>5),
            
        ));

	}

}
