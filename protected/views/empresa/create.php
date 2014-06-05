<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Empresas Registradas', 'url'=>array('index')),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Crear Empresa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>