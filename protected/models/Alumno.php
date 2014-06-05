<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $ALU_RUT
 * @property integer $CAR_ID
 * @property string $ALU_PASSWORD
 * @property string $ALU_NOMBRES
 * @property string $ALU_APELLIDO_P
 * @property string $ALU_APELLIDO_M
 * @property string $ALU_EMAIL
 * @property string $ALU_CELULAR
 * @property string $ALU_TELEFONO
 * @property string $ALU_AGNIO_INGRESO
 * @property integer $ALU_PERIODOS_CURSADOS
 * @property string $ALU_DIRECCION
 * @property string $ALU_ESTADO
 *
 * The followings are the available model relations:
 * @property Carrera $cAR
 * @property Bitacora[] $bitacoras
 * @property Practica[] $practicas
 */
class Alumno extends CActiveRecord
{	
	private $connection;
	public $RUT;
	public $PASSWORD;


	public function __construct()
    {
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,
        									Yii::app()->db->username,
        									Yii::app()->db->password);
        $this->connection->active=true;
    }


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
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
			array('CAR_ID, ALU_PERIODOS_CURSADOS', 'numerical', 'integerOnly'=>true),
			array('ALU_RUT', 'length', 'max'=>12),
			array('ALU_NOMBRES, ALU_EMAIL', 'length', 'max'=>30),
			array('ALU_APELLIDO_P, ALU_APELLIDO_M, ALU_ESTADO', 'length', 'max'=>20),
			array('ALU_CELULAR', 'length', 'max'=>11),
			array('ALU_TELEFONO', 'length', 'max'=>15),
			array('ALU_DIRECCION', 'length', 'max'=>50),
			array('ALU_PASSWORD, ALU_AGNIO_INGRESO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ALU_RUT, CAR_ID, ALU_PASSWORD, ALU_NOMBRES, ALU_APELLIDO_P, ALU_APELLIDO_M, ALU_EMAIL, ALU_CELULAR, ALU_TELEFONO, ALU_AGNIO_INGRESO, ALU_PERIODOS_CURSADOS, ALU_DIRECCION, ALU_ESTADO', 'safe', 'on'=>'search'),
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
			'cAR' => array(self::BELONGS_TO, 'Carrera', 'CAR_ID'),
			'bitacoras' => array(self::HAS_MANY, 'Bitacora', 'ALU_RUT'),
			'practicas' => array(self::HAS_MANY, 'Practica', 'ALU_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ALU_RUT' => 'Alu Rut',
			'CAR_ID' => 'Car',
			'ALU_PASSWORD' => 'Alu Password',
			'ALU_NOMBRES' => 'Alu Nombres',
			'ALU_APELLIDO_P' => 'Alu Apellido P',
			'ALU_APELLIDO_M' => 'Alu Apellido M',
			'ALU_EMAIL' => 'Alu Email',
			'ALU_CELULAR' => 'Alu Celular',
			'ALU_TELEFONO' => 'Alu Telefono',
			'ALU_AGNIO_INGRESO' => 'Alu Agnio Ingreso',
			'ALU_PERIODOS_CURSADOS' => 'Alu Periodos Cursados',
			'ALU_DIRECCION' => 'Alu Direccion',
			'ALU_ESTADO' => 'Alu Estado',
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

		$criteria->compare('ALU_RUT',$this->ALU_RUT,true);
		$criteria->compare('CAR_ID',$this->CAR_ID);
		$criteria->compare('ALU_PASSWORD',$this->ALU_PASSWORD,true);
		$criteria->compare('ALU_NOMBRES',$this->ALU_NOMBRES,true);
		$criteria->compare('ALU_APELLIDO_P',$this->ALU_APELLIDO_P,true);
		$criteria->compare('ALU_APELLIDO_M',$this->ALU_APELLIDO_M,true);
		$criteria->compare('ALU_EMAIL',$this->ALU_EMAIL,true);
		$criteria->compare('ALU_CELULAR',$this->ALU_CELULAR,true);
		$criteria->compare('ALU_TELEFONO',$this->ALU_TELEFONO,true);
		$criteria->compare('ALU_AGNIO_INGRESO',$this->ALU_AGNIO_INGRESO,true);
		$criteria->compare('ALU_PERIODOS_CURSADOS',$this->ALU_PERIODOS_CURSADOS);
		$criteria->compare('ALU_DIRECCION',$this->ALU_DIRECCION,true);
		$criteria->compare('ALU_ESTADO',$this->ALU_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public function login()
	{
		$user=Alumno::model()->find('ALU_RUT=? and ALU_PASSWORD=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}


	public function loginAlumno($ALU_RUT){

		$sql="SELECT ALU_RUT, ALU_NOMBRES, ALU_APELLIDO_P, ALU_APELLIDO_M 
			  FROM alumno
			  WHERE ALU_RUT = $ALU_RUT";//consulta sql 		
 		$rows = $this->connection->createCommand($sql)->queryAll();
 		return $rows;
	}

	public function passwordAlumno($ALU_RUT){
		$sql="SELECT ALU_PASSWORD 
			  FROM alumno
			  WHERE ALU_RUT = $ALU_RUT";//consulta sql 		
 		$rows = $this->connection->createCommand($sql)->queryAll();
 		return $rows;
	}
}
