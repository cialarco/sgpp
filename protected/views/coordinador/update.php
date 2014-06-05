<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */

$this->breadcrumbs=array(
	'Coordinadors'=>array('index'),
	$model->COO_RUT=>array('view','id'=>$model->COO_RUT),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coordinador', 'url'=>array('index')),
	array('label'=>'Create Coordinador', 'url'=>array('create')),
	array('label'=>'View Coordinador', 'url'=>array('view', 'id'=>$model->COO_RUT)),
	array('label'=>'Manage Coordinador', 'url'=>array('admin')),
);
?>

<h1>Update Coordinador <?php echo $model->COO_RUT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>