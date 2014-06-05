<?php
/* @var $this OfertaPracticaController */
/* @var $model OfertaPractica */

$this->breadcrumbs=array(
	'Oferta Practicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Ver Historial de Ofertas Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Oferta de Práctica', 'url'=>array('create')),
	array('label'=>'Administrar Oferta de Práctica', 'url'=>array('admin')),
);
?>

<h1>Registrar Oferta de Práctica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>