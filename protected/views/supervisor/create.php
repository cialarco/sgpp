<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Historial de Supervisores', 'url'=>array('index')),
	array('label'=>'Administrar Supervisor', 'url'=>array('admin')),
	
);
?>

<h1>Registrar Supervisor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>