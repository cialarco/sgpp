<?php
/* @var $this TipoPracticaController */
/* @var $model TipoPractica */

$this->breadcrumbs=array(
	'Tipo Practicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Historial Tipos de Práctica', 'url'=>array('index')),
	array('label'=>'Administrar Tipo de Práctica', 'url'=>array('admin')),
);
?>

<h1>Registrar Tipo de Práctica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>