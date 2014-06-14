<?php

class EmpresaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array(''),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array(''),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array(''),
			),
			array('deny',  // deny all users
				'users'=>array(''),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Empresa;
		$modelRubro = new Rubro();
		$modelGiro = new Giro();
		$modelReg = new Region();
		$modelProv = new Provincia();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Empresa'], $_POST['Rubro'], $_POST['Giro'], $_POST['Region'], $_POST['Giro']))
		{
			$model->attributes=$_POST['Empresa'];
			$modelRubro->attributes=$_POST['Rubro'];
			$modelGiro->attributes=$_POST['Giro'];
			$modelReg->attributes=$_POST['Region'];
			$modelProv->attributes=$_POST['Provincia'];

			$modelRubro->validate();
			$modelGiro->validate();
			$modelReg->validate();
			$modelProv->validate();

			if($model->save())
				$this->redirect(array('view','id'=>$model->EMP_RUT));
		}

		$this->render('create',array(
			'model'=>$model,
			'modelRubro'=>$modelRubro,
			'modelGiro'=>$modelGiro,
			'modelReg'=>$modelReg,
			'modelProv'=>$modelProv,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		//$model=$this->loadModel($id);
		$model=new Empresa;
		$modelRubro = new Rubro();
		$modelGiro = new Giro();
		$modelReg = new Region();
		$modelProv = new Provincia();
		$id = $_GET['id'];
		$model=Empresa::model()->findByPk($id);
		//$modelRubro->attributes=$_POST['Rubro'];
		//$modelGiro->attributes=$_POST['Giro'];
		//$modelReg->attributes=$_POST['Region'];
		//$modelProv->attributes=$_POST['Provincia'];

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Empresa'], $_POST['Rubro'], $_POST['Giro'], $_POST['Region'], $_POST['Giro']))
		{
			$model->attributes=$_POST['Empresa'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->EMP_RUT));
		}

		$this->render('update',array(
			'model'=>$model,
			'modelRubro'=>$modelRubro,
			'modelGiro'=>$modelGiro,
			'modelReg'=>$modelReg,
			'modelProv'=>$modelProv,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Empresa');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Empresa('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Empresa']))
			$model->attributes=$_GET['Empresa'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Empresa the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Empresa::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Empresa $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='empresa-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}






	public function actionselect_reg()
	{

		$id_uno =  $_POST['Region']['REG_ID'];
		$lista =  Provincia::model()->findAll('REG_ID = :id_uno',array(':id_uno'=>$id_uno));
		//$lista =  Provincia::model()->findAll('PRO_ID=? ', array($_POST['Empresa']['PRO_ID']));
		$lista = CHtml::listData($lista,'PRO_ID','PRO_NOMBRE');

			echo CHtml::tag('option', array('value' => ''), 'Seleccione Provincia...', true);

	          
            foreach ($lista as $valor => $PRO_ID){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($PRO_ID), true );
	    }
	}


	public function actionselect_pro()
	{

		$id_uno =  $_POST['Provincia']['PRO_ID'];
		$lista =  Comuna::model()->findAll('PRO_ID = :id_uno',array(':id_uno'=>$id_uno));
		//$lista =  Comuna::model()->findAll('PRO_ID=? ', array($_POST['Empresa']['PRO_ID']));
		$lista = CHtml::listData($lista,'COM_ID','COM_NOMBRE');

			echo CHtml::tag('option', array('value' => ''), 'Seleccione Comuna...', true);

	          
            foreach ($lista as $valor => $COM_ID){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($COM_ID), true );
	    }
	}

	public function actionselect_rub()
	{

		$id_uno =  $_POST['Rubro']['RUB_ID'];
		$lista =  Giro::model()->findAll('RUB_ID = :id_uno',array(':id_uno'=>$id_uno));
		//$lista =  Comuna::model()->findAll('PRO_ID=? ', array($_POST['Empresa']['PRO_ID']));
		$lista = CHtml::listData($lista,'GIR_ID','GIR_NOMBRE');

			echo CHtml::tag('option', array('value' => ''), 'Seleccione Giro...', true);

	          
            foreach ($lista as $valor => $GIR_ID){
                echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($GIR_ID), true );
	    }
	}
}
