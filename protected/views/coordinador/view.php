<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */

$this->breadcrumbs=array(
	'Coordinadors'=>array('index'),
	$model->COO_RUT,
);

$this->menu=array(
	array('label'=>'List Coordinador', 'url'=>array('index')),
	array('label'=>'Create Coordinador', 'url'=>array('create')),
	array('label'=>'Update Coordinador', 'url'=>array('update', 'id'=>$model->COO_RUT)),
	array('label'=>'Delete Coordinador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COO_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coordinador', 'url'=>array('admin')),
);
?>

<h1>View Coordinador #<?php echo $model->COO_RUT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COO_RUT',
		'CAR_ID',
		'COO_PASSWORD',
		'COO_NOMBRES',
		'COO_APELLIDO_P',
		'COO_APELLIDO_M',
		'COO_EMAIL',
		'COO_TELEFONO',
		'COO_CELULAR',
		'COO_CARGO',
		'COO_ESTADO',
	),
)); ?>
