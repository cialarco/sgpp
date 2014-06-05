<?php
/* @var $this Practica_adminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Practicas',
);

$this->menu=array(
	array('label'=>'Administrar Prácticas', 'url'=>array('admin')),
);
?>

<h1>Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
