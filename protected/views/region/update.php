<?php
/* @var $this RegionController */
/* @var $model Region */

$this->breadcrumbs=array(
	'Regions'=>array('index'),
	$model->REG_ID=>array('view','id'=>$model->REG_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Region', 'url'=>array('index')),
	array('label'=>'Create Region', 'url'=>array('create')),
	array('label'=>'View Region', 'url'=>array('view', 'id'=>$model->REG_ID)),
	array('label'=>'Manage Region', 'url'=>array('admin')),
);
?>

<h1>Update Region <?php echo $model->REG_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>