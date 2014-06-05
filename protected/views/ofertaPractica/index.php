<?php
/* @var $this OfertaPracticaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oferta Practicas',
);

$this->menu=array(
	array('label'=>'Ver Historial de Ofertas Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Oferta de Práctica', 'url'=>array('create')),
	array('label'=>'Administrar Oferta de Práctica', 'url'=>array('admin')),
);
?>

<h1>Ofertas de Práctica Disponibles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,

	'itemView'=>'_view',
)); ?>
