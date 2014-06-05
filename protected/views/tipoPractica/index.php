<?php
/* @var $this TipoPracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Practicas',
);

$this->menu=array(
	array('label'=>'Registrar Tipo de Práctica', 'url'=>array('create')),
	array('label'=>'Administrar Tipo de Práctica', 'url'=>array('admin')),
);
?>

<h1>Tipos de Practicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
