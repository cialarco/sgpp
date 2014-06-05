<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->SUP_ID=>array('view','id'=>$model->SUP_ID),
	'Update',
);

$this->menu=array(

	array('label'=>'Registrar Supervisor', 'url'=>array('create')),
	array('label'=>'Historial de Supervisores', 'url'=>array('index')),
	array('label'=>'Ver Supervisor', 'url'=>array('view', 'id'=>$model->SUP_ID)),
	array('label'=>'Administrar Supervisor', 'url'=>array('admin')),




);
?>

<h1>Modificar Supervisor <?php echo $model->SUP_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>