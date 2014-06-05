<?php

/**
 * This is the model class for table "supervisor".
 *
 * The followings are the available columns in table 'supervisor':
 * @property integer $SUP_ID
 * @property string $SUP_RUT
 * @property string $EMP_RUT
 * @property string $SUP_PASSWORD
 * @property string $SUP_NOMBRES
 * @property string $SUP_APELLIDO_P
 * @property string $SUP_APELLIDO_M
 * @property string $SUP_EMAIL
 * @property string $SUP_TELEFONO
 * @property string $SUP_CELULAR
 * @property string $SUP_ESTADO
 * @property string $SUP_PROFESION
 * @property string $SUP_CARGO
 *
 * The followings are the available model relations:
 * @property OfertaPractica[] $ofertaPracticas
 * @property Empresa $eMPRUT
 */
class Supervisor extends CActiveRecord
{

	private $connection;
	public $RUT;
	public $PASSWORD;


    /**
	 * @return string the associated database table name
	 */
	
	public function tableName()
	{
		return 'supervisor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SUP_RUT, EMP_RUT, SUP_PASSWORD, SUP_NOMBRES, SUP_APELLIDO_P, SUP_APELLIDO_M, SUP_EMAIL, SUP_TELEFONO, SUP_CELULAR, SUP_ESTADO, SUP_PROFESION, SUP_CARGO', 'required'),
			array('SUP_RUT, EMP_RUT', 'ECompositeUniqueValidator','attributesToAddError'=>'SUP_RUT,EMP_RUT',
            'message'=>'Supervisor ya ingresado en la empresa'),
			array('SUP_RUT', 'length', 'max'=>12, 'min'=>11),
			array('EMP_RUT', 'length', 'max'=>13),
			array('SUP_NOMBRES, SUP_EMAIL, SUP_CARGO', 'length', 'max'=>30),
			array('SUP_APELLIDO_P, SUP_APELLIDO_M, SUP_ESTADO', 'length', 'max'=>20),
			array('SUP_TELEFONO', 'length', 'max'=>15),
			array('SUP_CELULAR', 'length', 'max'=>12),
			array('SUP_PROFESION', 'length', 'max'=>50),
			array('SUP_PASSWORD', 'safe'),
			array('SUP_EMAIL', 'email'),
			array('SUP_RUT', 'validateRut'),
		//	array('SUP_RUT','getFormattedRut'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SUP_ID, SUP_RUT, EMP_RUT, SUP_PASSWORD, SUP_NOMBRES, SUP_APELLIDO_P, SUP_APELLIDO_M, SUP_EMAIL, SUP_TELEFONO, SUP_CELULAR, SUP_ESTADO, SUP_PROFESION, SUP_CARGO', 'safe', 'on'=>'search'),
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
			'ofertaPracticas' => array(self::HAS_MANY, 'OfertaPractica', 'SUP_ID'),
			'eMPRUT' => array(self::BELONGS_TO, 'Empresa', 'EMP_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SUP_ID' => 'Código Supervisor',
			'SUP_RUT' => 'Rut Supervisor',
			'EMP_RUT' => 'Rut Empresa',
			'SUP_PASSWORD' => 'Password',
			'SUP_NOMBRES' => 'Nombres',
			'SUP_APELLIDO_P' => 'Apellido Paterno',
			'SUP_APELLIDO_M' => 'Apellido Materno',
			'SUP_EMAIL' => 'Email',
			'SUP_TELEFONO' => 'Teléfono',
			'SUP_CELULAR' => 'Celular',
			'SUP_ESTADO' => 'Estado',
			'SUP_PROFESION' => 'Profesión',
			'SUP_CARGO' => 'Cargo',
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

		$criteria->compare('SUP_ID',$this->SUP_ID);
		$criteria->compare('SUP_RUT',$this->SUP_RUT,true);
		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('SUP_PASSWORD',$this->SUP_PASSWORD,true);
		$criteria->compare('SUP_NOMBRES',$this->SUP_NOMBRES,true);
		$criteria->compare('SUP_APELLIDO_P',$this->SUP_APELLIDO_P,true);
		$criteria->compare('SUP_APELLIDO_M',$this->SUP_APELLIDO_M,true);
		$criteria->compare('SUP_EMAIL',$this->SUP_EMAIL,true);
		$criteria->compare('SUP_TELEFONO',$this->SUP_TELEFONO,true);
		$criteria->compare('SUP_CELULAR',$this->SUP_CELULAR,true);
		$criteria->compare('SUP_ESTADO',$this->SUP_ESTADO,true);
		$criteria->compare('SUP_PROFESION',$this->SUP_PROFESION,true);
		$criteria->compare('SUP_CARGO',$this->SUP_CARGO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Supervisor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


// FUNCION PARA AGREGAR PUNTOS Y GUION AL RUT ... PERO NO SE COMO APLICARLO xD



/*
public function getFormattedRut() {
        $unformattedRut = $this->SUP_RUT;
        if (strpos($unformattedRut, '-') !== true ) {
            $splittedRut = explode('-', $unformattedRut);
            $number = number_format($splittedRut[0], 0, ',', '.');
            $verifier = strtoupper($splittedRut[1]);
            return $number . '-' . $verifier;
        }
        return number_format($unformattedRut, 0, ',', '.');
    }

*/


//VALIDADOR RUT

public function validateRut($attribute,$params){

	
	$rut = $this->SUP_RUT;

	$suma = "";

	if(strpos($rut,"-")==false){

		$this->addError($attribute, 'El RUT ingresado no es válido');
        $RUT[0] = substr($rut, 0, -1);

        $RUT[1] = substr($rut, -1);

    }else{


        $RUT = explode("-", trim($rut));
    	

    }

    $elRut = str_replace(".", "", trim($RUT[0]));

    $factor = 2;

    for($i = strlen($elRut)-1; $i >= 0; $i--):

        $factor = $factor > 7 ? 2 : $factor;

        $suma += $elRut{$i}*$factor++;

    endfor;

    $resto = $suma % 11;

    $dv = 11 - $resto;

    if($dv == 11){

        $dv=0;

    }else if($dv == 10){

        $dv="k";

    }else{

        $dv=$dv;

    }

   if($dv == trim(strtolower($RUT[1]))){

       return true;

   }else{

       $this->addError($attribute, 'El RUT ingresado no es válido');

   }

}


// FUNCION PARA LOGIN

	public function login()
	{
		$user=Supervisor::model()->find('SUP_RUT=? and SUP_PASSWORD=?',array($this->RUT,$this->PASSWORD));
        return $user;
	}


	
}
