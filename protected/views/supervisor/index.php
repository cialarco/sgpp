<?php
/* @var $this SupervisorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supervisors',
);

$this->menu=array(
	array('label'=>'Registrar Supervisor', 'url'=>array('create')),
	array('label'=>'Historial de Supervisores', 'url'=>array('index')),
	array('label'=>'Administrar Supervisor', 'url'=>array('admin')),
);
?>

<h1>Supervisores Activos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
