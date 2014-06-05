<?php
/* @var $this PracticaController */
/* @var $dataProvider CActiveDataProvider */
$session=new CHttpSession;
$session->open();
$this->breadcrumbs=array(
	'Practicas',
);

$this->menu=array(
	array('label'=>'Pre-Inscribir Practica', 'url'=>array('create')),
);
?>
<h1>Historial</h1>

<?php 
	
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
