<?php
/* @var $this TipoPracticaController */
/* @var $model TipoPractica */

$this->breadcrumbs=array(
	'Tipo Practicas'=>array('index'),
	$model->TPP_ID=>array('view','id'=>$model->TPP_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Historial Tipos de Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Tipo de Práctica', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Practica', 'url'=>array('view', 'id'=>$model->TPP_ID)),
	array('label'=>'Administrar Tipo Práctica', 'url'=>array('admin')),
);
?>

<h1>Modificar Tipos de Práctica <?php echo $model->TPP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>