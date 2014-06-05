<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $model OfertaPractica_alumno */

$this->breadcrumbs=array(
	'Oferta Practica Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Historial de Prácticas', 'url'=>array('index')),
	array('label'=>'Pre-Inscribir Práctica', 'url'=>array('/Practica/create')),
);
?>

<h1>Create OfertaPractica_alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>