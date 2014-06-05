<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	$model->SEC_RUT,
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'Update Secretaria', 'url'=>array('update', 'id'=>$model->SEC_RUT)),
	array('label'=>'Delete Secretaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SEC_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>View Secretaria #<?php echo $model->SEC_RUT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SEC_RUT',
		'SEC_PASSWORD',
		'SEC_NOMBRES',
		'SEC_APELLIDO_P',
		'SEC_APELLIDO_M',
		'SEC_EMAIL',
		'SEC_TELEFONO',
		'SEC_CELULAR',
		'SEC_ESTADO',
	),
)); ?>
