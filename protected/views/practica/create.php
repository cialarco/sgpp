<?php
/* @var $this PracticaController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	'Pre-Inscribir Práctica'
);

$this->menu=array(
	array('label'=>'Ver Historial Personal', 'url'=>array('index')),
	
);
?>

<h1>Pre- Inscribir Práctica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>