<?php
/* @var $this TipoPracticaController */
/* @var $model TipoPractica */

$this->breadcrumbs=array(
	'Tipo Practicas'=>array('index'),
	$model->TPP_ID,
);

$this->menu=array(
	array('label'=>'Historial Tipos de Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Tipo de Práctica', 'url'=>array('create')),
	array('label'=>'Modificar Tipo de Práctica', 'url'=>array('update', 'id'=>$model->TPP_ID)),
	array('label'=>'Eliminar Tipo de Práctica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TPP_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Tipo de Práctica', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de Práctica #<?php echo $model->TPP_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TPP_ID',
		'TPP_CODIGO',
		'CAR_ID',
		'TTP_NOMBRE',
	),
)); ?>
