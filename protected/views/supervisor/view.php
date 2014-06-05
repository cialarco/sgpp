<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->SUP_ID,
);

$this->menu=array(
	array('label'=>'Registrar Supervisor', 'url'=>array('create')),
	array('label'=>'Historial de Supervisores', 'url'=>array('index')),
	array('label'=>'Modificar Supervisor', 'url'=>array('update', 'id'=>$model->SUP_ID)),
	array('label'=>'Eliminar Supervisor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SUP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Supervisor', 'url'=>array('admin')),






);
?>

<h1>Ver Supervisor #<?php echo $model->SUP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SUP_ID',
		'SUP_RUT',
		'EMP_RUT',
		'SUP_PASSWORD',
		'SUP_NOMBRES',
		'SUP_APELLIDO_P',
		'SUP_APELLIDO_M',
		'SUP_EMAIL',
		'SUP_TELEFONO',
		'SUP_CELULAR',
		'SUP_ESTADO',
		'SUP_PROFESION',
		'SUP_CARGO',
	),
)); ?>
