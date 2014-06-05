<?php
/* @var $this Practica_adminController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	$model->PRA_ID=>array('view','id'=>$model->PRA_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Ver Prácticas ', 'url'=>array('index')),
	array('label'=>'Información de Práctica Actual', 'url'=>array('view', 'id'=>$model->PRA_ID)),
	array('label'=>'Administrar Prácticas', 'url'=>array('admin')),
);
?>

<h1>Modificar Práctica <?php echo $model->PRA_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>