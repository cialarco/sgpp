<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oferta Practica Alumnos',
);

$this->menu=array(

	array('label'=>'Ver Historial de Prácticas', 'url'=>array('index')),
	array('label'=>'Pre-Inscribir Práctica', 'url'=>array('/Practica/create')),
);
?>

<h1>Ofertas de Práctica Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
