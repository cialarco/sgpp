<?php
/* @var $this PracticaController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->ALU_RUT,
);

$this->menu=array(
	array('label'=>'Ver Historial de Prácticas', 'url'=>array('index')),
	array('label'=>'Pre-Inscribir Práctica', 'url'=>array('create')),
);
?>

<h1>Práctica Inscrita  </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
&nbsp;&nbsp;
<h2>Datos de Contacto Supervisor</h2>

<?php 
	$oferta=OfertaPractica::model()->findByAttributes(array('OFE_ID'=> "$model->OFE_ID"  ));
	$model_sup =  Supervisor::model()->findByAttributes(array('SUP_ID'=>"$oferta->SUP_ID"));
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model_sup,
	'attributes'=>array(
		'SUP_RUT',
		'EMP_RUT',
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