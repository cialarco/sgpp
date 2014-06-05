<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>Create Secretaria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>