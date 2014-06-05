<?php
/* @var $this Practica_adminController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->PRA_ID,
);

$this->menu=array(
	array('label'=>'Ver Prácticas', 'url'=>array('index')),
	array('label'=>'Eliminar Práctica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->PRA_ID),'confirm'=>'¿Está seguro que desea eliminar este item?')),
	array('label'=>'Administrar Prácticas', 'url'=>array('admin')),
);
?>

<h1>Información de Práctica #<?php echo $model->PRA_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'PRA_ID',
		'ALU_RUT',
		'OFE_ID',
		'PRA_FECHA_INI',
		'PRA_FECHA_FIN',
		'PRA_INF_EVALUACION',
		'PRA_INF_ALUMNO',
		'PRA_NOTA',
		'PRA_CANT_HORAS',
		'PRA_ESTADO',
	),
)); ?>
