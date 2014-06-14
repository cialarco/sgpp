<?php
/* @var $this ProvinciaController */
/* @var $model Provincia */

$this->breadcrumbs=array(
	'Provincias'=>array('index'),
	$model->PRO_ID=>array('view','id'=>$model->PRO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Provincia', 'url'=>array('index')),
	array('label'=>'Create Provincia', 'url'=>array('create')),
	array('label'=>'View Provincia', 'url'=>array('view', 'id'=>$model->PRO_ID)),
	array('label'=>'Manage Provincia', 'url'=>array('admin')),
);
?>

<h1>Update Provincia <?php echo $model->PRO_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>