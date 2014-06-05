<?php

/**
 * This is the model class for table "secretaria".
 *
 * The followings are the available columns in table 'secretaria':
 * @property string $SEC_RUT
 * @property string $SEC_PASSWORD
 * @property string $SEC_NOMBRES
 * @property string $SEC_APELLIDO_P
 * @property string $SEC_APELLIDO_M
 * @property string $SEC_EMAIL
 * @property string $SEC_TELEFONO
 * @property string $SEC_CELULAR
 * @property string $SEC_ESTADO
 */
class Secretaria extends CActiveRecord
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
		return 'secretaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SEC_RUT', 'required'),
			array('SEC_RUT', 'length', 'max'=>12),
			array('SEC_NOMBRES, SEC_EMAIL', 'length', 'max'=>30),
			array('SEC_APELLIDO_P, SEC_APELLIDO_M, SEC_ESTADO', 'length', 'max'=>20),
			array('SEC_TELEFONO', 'length', 'max'=>15),
			array('SEC_CELULAR', 'length', 'max'=>11),
			array('SEC_PASSWORD', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SEC_RUT, SEC_PASSWORD, SEC_NOMBRES, SEC_APELLIDO_P, SEC_APELLIDO_M, SEC_EMAIL, SEC_TELEFONO, SEC_CELULAR, SEC_ESTADO', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SEC_RUT' => 'Sec Rut',
			'SEC_PASSWORD' => 'Sec Password',
			'SEC_NOMBRES' => 'Sec Nombres',
			'SEC_APELLIDO_P' => 'Sec Apellido P',
			'SEC_APELLIDO_M' => 'Sec Apellido M',
			'SEC_EMAIL' => 'Sec Email',
			'SEC_TELEFONO' => 'Sec Telefono',
			'SEC_CELULAR' => 'Sec Celular',
			'SEC_ESTADO' => 'Sec Estado',
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

		$criteria->compare('SEC_RUT',$this->SEC_RUT,true);
		$criteria->compare('SEC_PASSWORD',$this->SEC_PASSWORD,true);
		$criteria->compare('SEC_NOMBRES',$this->SEC_NOMBRES,true);
		$criteria->compare('SEC_APELLIDO_P',$this->SEC_APELLIDO_P,true);
		$criteria->compare('SEC_APELLIDO_M',$this->SEC_APELLIDO_M,true);
		$criteria->compare('SEC_EMAIL',$this->SEC_EMAIL,true);
		$criteria->compare('SEC_TELEFONO',$this->SEC_TELEFONO,true);
		$criteria->compare('SEC_CELULAR',$this->SEC_CELULAR,true);
		$criteria->compare('SEC_ESTADO',$this->SEC_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Secretaria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function login()
	{
		$user=Secretaria::model()->find('SEC_RUT=? and SEC_PASSWORD=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}
}
