<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	$model->EVE_ID,
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'Update Eventos', 'url'=>array('update', 'id'=>$model->EVE_ID)),
	array('label'=>'Delete Eventos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EVE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>View Eventos #<?php echo $model->EVE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EVE_ID',
		'EVE_NOMBRE',
		'EVE_DESCRIPCION',
		'EVE_FECHA_PUBLICACION',
		'EVE_FECHA_CADUCA',
		'EVE_HORA',
		'EVE_ESTADO',
	),
)); ?>
