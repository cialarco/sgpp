<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property string $EMP_RUT
 * @property integer $COM_ID
 * @property string $EMP_NOMBRE
 * @property string $EMP_DIRECCION
 * @property string $EMP_TELEFONO
 * @property string $EMP_CELULAR
 * @property string $EMP_GIRO
 * @property string $EMP_RUBRO
 * @property string $EMP_DESCRIPCION
 * @property string $EMP_EMAIL
 * @property string $EMP_WEB
 *
 * The followings are the available model relations:
 * @property Comuna $cOM
 * @property OfertaPractica[] $ofertaPracticas
 * @property Supervisor[] $supervisors
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_RUT', 'required'),
			array('COM_ID', 'numerical', 'integerOnly'=>true),
			array('EMP_RUT', 'length', 'max'=>13),
			array('EMP_NOMBRE, EMP_DESCRIPCION', 'length', 'max'=>100),
			array('EMP_DIRECCION, EMP_GIRO, EMP_RUBRO, EMP_WEB', 'length', 'max'=>50),
			array('EMP_TELEFONO', 'length', 'max'=>15),
			array('EMP_CELULAR', 'length', 'max'=>11),
			array('EMP_EMAIL', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EMP_RUT, COM_ID, EMP_NOMBRE, EMP_DIRECCION, EMP_TELEFONO, EMP_CELULAR, EMP_GIRO, EMP_RUBRO, EMP_DESCRIPCION, EMP_EMAIL, EMP_WEB', 'safe', 'on'=>'search'),
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
			'cOM' => array(self::BELONGS_TO, 'Comuna', 'COM_ID'),
			'ofertaPracticas' => array(self::HAS_MANY, 'OfertaPractica', 'EMP_RUT'),
			'supervisors' => array(self::HAS_MANY, 'Supervisor', 'EMP_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMP_RUT' => 'Emp Rut',
			'COM_ID' => 'Com',
			'EMP_NOMBRE' => 'Emp Nombre',
			'EMP_DIRECCION' => 'Emp Direccion',
			'EMP_TELEFONO' => 'Emp Telefono',
			'EMP_CELULAR' => 'Emp Celular',
			'EMP_GIRO' => 'Emp Giro',
			'EMP_RUBRO' => 'Emp Rubro',
			'EMP_DESCRIPCION' => 'Emp Descripcion',
			'EMP_EMAIL' => 'Emp Email',
			'EMP_WEB' => 'Emp Web',
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

		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('COM_ID',$this->COM_ID);
		$criteria->compare('EMP_NOMBRE',$this->EMP_NOMBRE,true);
		$criteria->compare('EMP_DIRECCION',$this->EMP_DIRECCION,true);
		$criteria->compare('EMP_TELEFONO',$this->EMP_TELEFONO,true);
		$criteria->compare('EMP_CELULAR',$this->EMP_CELULAR,true);
		$criteria->compare('EMP_GIRO',$this->EMP_GIRO,true);
		$criteria->compare('EMP_RUBRO',$this->EMP_RUBRO,true);
		$criteria->compare('EMP_DESCRIPCION',$this->EMP_DESCRIPCION,true);
		$criteria->compare('EMP_EMAIL',$this->EMP_EMAIL,true);
		$criteria->compare('EMP_WEB',$this->EMP_WEB,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
