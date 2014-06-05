<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $model OfertaPractica_alumno */

$this->breadcrumbs=array(
	'Oferta Practica Alumnos'=>array('index'),
	$model->OFE_ID,
);

$this->menu=array(
	array('label'=>'Ver Historial de Prácticas', 'url'=>array('index')),
	array('label'=>'Pre-Inscribir Práctica', 'url'=>array('/Practica/create')),

);
?>

<h1>View OfertaPractica_alumno #<?php echo $model->OFE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'OFE_ID',
		'EMP_RUT',
		'SUP_ID',
		'COO_RUT',
		'TPP_ID',
		'OFE_NOMBRE',
		'OFE_DESCRIPCION',
		'OFE_ESTADO',
		'OFE_CUPOS',
		'OFE_FECHA_PUBLICACION',
		'OFE_FECHA_CADUCA',
		'OFE_TAREAS',
		'OFE_AREA_TRABAJO',
	),
)); ?>
