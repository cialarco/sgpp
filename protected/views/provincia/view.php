<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */

$this->breadcrumbs=array(
	'Provincias'=>array('index'),
	$model->PRO_ID,
);

$this->menu=array(
	array('label'=>'List Provincia', 'url'=>array('index')),
	array('label'=>'Create Provincia', 'url'=>array('create')),
	array('label'=>'Update Provincia', 'url'=>array('update', 'id'=>$model->PRO_ID)),
	array('label'=>'Delete Provincia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PRO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provincia', 'url'=>array('admin')),
);
?>

<h1>View Provincia #<?php echo $model->PRO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PRO_ID',
		'REG_ID',
		'PRO_NOMBRE',
	),
)); ?>
