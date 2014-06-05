<?php

/**
 * This is the model class for table "practica".
 *
 * The followings are the available columns in table 'practica':
 * @property integer $PRA_ID
 * @property string $ALU_RUT
 * @property integer $OFE_ID
 * @property string $PRA_FECHA_INI
 * @property string $PRA_FECHA_FIN
 * @property string $PRA_INF_EVALUACION
 * @property string $PRA_INF_ALUMNO
 * @property double $PRA_NOTA
 * @property integer $PRA_CANT_HORAS
 * @property string $PRA_ESTADO
 *
 * The followings are the available model relations:
 * @property Alumno $aLURUT
 * @property OfertaPractica $oFE
 */
class Practica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'practica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ALU_RUT', 'required'),
			array('ALU_RUT, OFE_ID', 'ECompositeUniqueValidator','attributesToAddError'=>'ALU_RUT,OFE_ID',
            'message'=>'No puede volver a inscribir la misma práctica'),
			array('OFE_ID, PRA_CANT_HORAS', 'numerical', 'integerOnly'=>true),
			array('PRA_NOTA', 'numerical'),
			array('ALU_RUT', 'length', 'max'=>12),
			array('PRA_ESTADO', 'length', 'max'=>20),
			array('PRA_FECHA_INI, PRA_FECHA_FIN, PRA_INF_EVALUACION, PRA_INF_ALUMNO', 'safe'),
			array('PRA_FECHA_FIN','compare','compareAttribute'=>'PRA_FECHA_INI','operator'=>'>=','message'=>'Fecha de Término debe ser superior a Fecha de Inicio'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRA_ID, ALU_RUT, OFE_ID, PRA_FECHA_INI, PRA_FECHA_FIN, PRA_INF_EVALUACION, PRA_INF_ALUMNO, PRA_NOTA, PRA_CANT_HORAS, PRA_ESTADO', 'safe', 'on'=>'search'),
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
			'PRA_ID' => 'Pra',
			'ALU_RUT' => 'Alu Rut',
			'OFE_ID' => 'Ofe',
			'PRA_FECHA_INI' => 'Pra Fecha Ini',
			'PRA_FECHA_FIN' => 'Pra Fecha Fin',
			'PRA_INF_EVALUACION' => 'Pra Inf Evaluacion',
			'PRA_INF_ALUMNO' => 'Pra Inf Alumno',
			'PRA_NOTA' => 'Pra Nota',
			'PRA_CANT_HORAS' => 'Pra Cant Horas',
			'PRA_ESTADO' => 'Pra Estado',
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

		$criteria->compare('PRA_ID',$this->PRA_ID);
		$criteria->compare('ALU_RUT',$this->ALU_RUT,true);
		$criteria->compare('OFE_ID',$this->OFE_ID);
		$criteria->compare('PRA_FECHA_INI',$this->PRA_FECHA_INI,true);
		$criteria->compare('PRA_FECHA_FIN',$this->PRA_FECHA_FIN,true);
		$criteria->compare('PRA_INF_EVALUACION',$this->PRA_INF_EVALUACION,true);
		$criteria->compare('PRA_INF_ALUMNO',$this->PRA_INF_ALUMNO,true);
		$criteria->compare('PRA_NOTA',$this->PRA_NOTA);
		$criteria->compare('PRA_CANT_HORAS',$this->PRA_CANT_HORAS);
		$criteria->compare('PRA_ESTADO',$this->PRA_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Practica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
