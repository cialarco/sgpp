<?php

class BitacoraController extends Controller{
	
	

	public function actionIndex(){

		$session=new CHttpSession;
    	$session->open();

		if($session['TIPO_USUARIO']=='alumno')
		{	//$model=Bitacora::model();
			//$tareas=$model->findAll();

			$criteria=new CDbCriteria;
			$criteria->select= "*";
			$criteria->order='t.BIT_FECHA DESC';
			$criteria->compare('t.ALU_RUT',$session['RUT']) ;
		
		#$criteria->compare('BIT_ID',$this->BIT_ID);
		#$bita = new CActiveDataProvider($this, array('criteria'=>$criteria,));

		$tareas = Bitacora::model()->findAll($criteria);

			$this->render('index',array('tareas' => $tareas));
		}elseif ($session['TIPO_USUARIO']=='coordinador') {
			$this->actionCoordinador();
		}elseif ($session['TIPO_USUARIO']=='supervisor') {
			$this->actionSupervisor();
		}
	}


	public function actionView($id){
		$model = Bitacora::model()->findByPk($id);
		$this->render('view',array('model'=>$model));

	}

	public function actionViewCoordinador($id){

		$criteria=new CDbCriteria;
		$criteria->select= "t.BIT_ID, t.BIT_FECHA, al.ALU_RUT, al.ALU_NOMBRES, al.ALU_APELLIDO_P, al.ALU_APELLIDO_M, of.EMP_RUT,
		t.BIT_DESCRIPCION";
		$criteria->join= 'INNER JOIN ALUMNO al ON al.ALU_RUT = t.ALU_RUT'.' '.'INNER JOIN oferta_practica of ON of.OFE_ID = t.OFE_ID';
		
		$criteria->order='t.BIT_FECHA DESC';
		$criteria->compare('t.BIT_ID',$id);
		#$criteria->compare('BIT_ID',$this->BIT_ID);
		#$bita = new CActiveDataProvider($this, array('criteria'=>$criteria,));

		$bitacoras = Bitacora::model()->find($criteria);
		//$model=Bitacora::listadoCordinador();
		//$tareas=$model->findAll();
				
		$this->render('viewCoordinador',array('bitacoras' => $bitacoras));

		#$model = Bitacora::model()->findByPk($id);
		#$this->render('view',array('model'=>$model));

	}


	public function actionAdd(){
		
		$session=new CHttpSession;
    	$session->open();
		$model = new Bitacora();
		if(isset($_POST['Bitacora']))
		{	
			$sql = "SELECT OFE_ID, MAX(PRA_FECHA_INI) FROM practica  WHERE ALU_RUT= '".$session['RUT']."' ";
			$consulta = Yii::app()->db->createCommand($sql)->queryRow();

		/*	$consulta = Yii::app()->db->createCommand()
					->select('OFE_ID')
					->from('practica')
					->where('ALU_RUT = '.$session['RUT'].'')
					->order('PRA_FECHA_INI DESC')
					->queryRow();*/
			$ofer= $consulta['OFE_ID'];
			date_default_timezone_set("America/Santiago");

			$datos = array('BIT_FECHA' => '2014-04-28',//date("Y-m-d"), 
							'ALU_RUT'=>$session['RUT'], //segun variable de 'session' asignar rut
							'OFE_ID'=>$ofer,#$consulta['OFE_ID'],	//segun se este haciendo la practica agregar el id
							'BIT_HORA'=>date('H:i:s'),
							'BIT_DESCRIPCION'=>$_POST['Bitacora']['BIT_DESCRIPCION']
							);

			//$model->attributes=$_POST['Bitacora'];
			$model->attributes=$datos;
			if($model->save())
				$this->redirect(array('view','id'=>$model->BIT_ID));
		}

		
		$this->render('add',array('model'=>$model));
	}

	public function actionCoordinador(){
		$session=new CHttpSession;
    	$session->open();

		$criteria=new CDbCriteria;
		$criteria->select= "t.BIT_ID, t.BIT_FECHA, al.ALU_RUT, al.ALU_NOMBRES, al.ALU_APELLIDO_P, al.ALU_APELLIDO_M, 
		t.BIT_DESCRIPCION";
		$criteria->join= 'INNER JOIN ALUMNO al ON al.ALU_RUT = t.ALU_RUT'.' '.'INNER JOIN oferta_practica of ON of.OFE_ID = t.OFE_ID';
		$criteria->order='t.BIT_FECHA DESC';
		$criteria->compare('of.COO_RUT',$session['RUT']) ;
		
		#$criteria->compare('BIT_ID',$this->BIT_ID);
		#$bita = new CActiveDataProvider($this, array('criteria'=>$criteria,));

		$bitacoras = Bitacora::model()->findAll($criteria);
		//$model=Bitacora::listadoCordinador();
		//$tareas=$model->findAll();
				
		$this->render('coordinador',array('bitacoras' => $bitacoras));
	}

	public function actionSupervisor(){
		$session=new CHttpSession;
    	$session->open();
		
		$sql= "SELECT b.BIT_ID, b.BIT_FECHA, al.ALU_RUT, al.ALU_NOMBRES, al.ALU_APELLIDO_P, al.ALU_APELLIDO_M, b.BIT_DESCRIPCION 
		FROM bitacora b, supervisor s, oferta_practica of, alumno al WHERE b.OFE_ID=of.OFE_ID AND s.SUP_ID = of.SUP_ID
		AND al.ALU_RUT = b.ALU_RUT AND s.SUP_RUT= ".$session['RUT']." ";

		$bitacoras = Bitacora::model()->findAllBySql($sql);
		//$model=Bitacora::listadoCordinador();
		//$tareas=$model->findAll();
				
		$this->render('supervisor',array('bitacoras' => $bitacoras));
	}

	public function actionDelete($id){
		$model=Bitacora::model()->findByPk($id);
		$model->delete();
		$this->redirect(array('index'));
	}


}
 