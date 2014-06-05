<?php

/**
 * This is the model class for table "coordinador".
 *
 * The followings are the available columns in table 'coordinador':
 * @property string $COO_RUT
 * @property integer $CAR_ID
 * @property string $COO_PASSWORD
 * @property string $COO_NOMBRES
 * @property string $COO_APELLIDO_P
 * @property string $COO_APELLIDO_M
 * @property string $COO_EMAIL
 * @property string $COO_TELEFONO
 * @property string $COO_CELULAR
 * @property string $COO_CARGO
 * @property string $COO_ESTADO
 *
 * The followings are the available model relations:
 * @property Carrera $cAR
 * @property OfertaPractica[] $ofertaPracticas
 */
class Coordinador extends CActiveRecord
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
		return 'coordinador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COO_RUT', 'required'),
			array('CAR_ID', 'numerical', 'integerOnly'=>true),
			array('COO_RUT', 'length', 'max'=>12),
			array('COO_NOMBRES, COO_EMAIL', 'length', 'max'=>30),
			array('COO_APELLIDO_P, COO_APELLIDO_M, COO_CARGO, COO_ESTADO', 'length', 'max'=>20),
			array('COO_TELEFONO', 'length', 'max'=>15),
			array('COO_CELULAR', 'length', 'max'=>11),
			array('COO_PASSWORD', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COO_RUT, CAR_ID, COO_PASSWORD, COO_NOMBRES, COO_APELLIDO_P, COO_APELLIDO_M, COO_EMAIL, COO_TELEFONO, COO_CELULAR, COO_CARGO, COO_ESTADO', 'safe', 'on'=>'search'),
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
			'ofertaPracticas' => array(self::HAS_MANY, 'OfertaPractica', 'COO_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COO_RUT' => 'Coo Rut',
			'CAR_ID' => 'Car',
			'COO_PASSWORD' => 'Coo Password',
			'COO_NOMBRES' => 'Coo Nombres',
			'COO_APELLIDO_P' => 'Coo Apellido P',
			'COO_APELLIDO_M' => 'Coo Apellido M',
			'COO_EMAIL' => 'Coo Email',
			'COO_TELEFONO' => 'Coo Telefono',
			'COO_CELULAR' => 'Coo Celular',
			'COO_CARGO' => 'Coo Cargo',
			'COO_ESTADO' => 'Coo Estado',
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

		$criteria->compare('COO_RUT',$this->COO_RUT,true);
		$criteria->compare('CAR_ID',$this->CAR_ID);
		$criteria->compare('COO_PASSWORD',$this->COO_PASSWORD,true);
		$criteria->compare('COO_NOMBRES',$this->COO_NOMBRES,true);
		$criteria->compare('COO_APELLIDO_P',$this->COO_APELLIDO_P,true);
		$criteria->compare('COO_APELLIDO_M',$this->COO_APELLIDO_M,true);
		$criteria->compare('COO_EMAIL',$this->COO_EMAIL,true);
		$criteria->compare('COO_TELEFONO',$this->COO_TELEFONO,true);
		$criteria->compare('COO_CELULAR',$this->COO_CELULAR,true);
		$criteria->compare('COO_CARGO',$this->COO_CARGO,true);
		$criteria->compare('COO_ESTADO',$this->COO_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Coordinador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function login()
	{
		$user=Coordinador::model()->find('COO_RUT=? and COO_PASSWORD=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}
}
