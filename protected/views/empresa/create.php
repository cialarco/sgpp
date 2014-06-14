<?php
/* @var $this EmpresaController */
/* @var $model Empresa */


$this->menu=array(
	//array('label'=>'Empresas Registradas', 'url'=>array('index')),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Crear Empresa</h1>

<?php $this->renderPartial('_form', array(
										'model'=>$model,
										'modelRubro'=>$modelRubro,
										'modelGiro'=>$modelGiro,
										'modelReg'=>$modelReg,
										'modelProv'=>$modelProv
	)); ?>