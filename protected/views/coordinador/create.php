<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */

$this->breadcrumbs=array(
	'Coordinadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coordinador', 'url'=>array('index')),
	array('label'=>'Manage Coordinador', 'url'=>array('admin')),
);
?>

<h1>Create Coordinador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>