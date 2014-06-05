<?php
/* @var $this CoordinadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Coordinadors',
);

$this->menu=array(
	array('label'=>'Create Coordinador', 'url'=>array('create')),
	array('label'=>'Manage Coordinador', 'url'=>array('admin')),
);
?>

<h1>Coordinadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
