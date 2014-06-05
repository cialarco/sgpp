<?php
/* @var $this OfertaPracticaController */
/* @var $model OfertaPractica */

$this->breadcrumbs=array(
	'Oferta Practicas'=>array('index'),
	$model->OFE_ID=>array('view','id'=>$model->OFE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Historial de Ofertas Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Oferta de Práctica', 'url'=>array('create')),
	array('label'=>'Ver Oferta de Práctica', 'url'=>array('view', 'id'=>$model->OFE_ID)),
	array('label'=>'Administrar Oferta de Práctica', 'url'=>array('admin')),





);
?>

<h1>Modificar Oferta de Práctica <?php echo $model->OFE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>