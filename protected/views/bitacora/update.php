<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */

$this->breadcrumbs=array(
	'Bitacoras'=>array('index'),
	$model->BIT_ID=>array('view','id'=>$model->BIT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bitacora', 'url'=>array('index')),
	array('label'=>'Create Bitacora', 'url'=>array('create')),
	array('label'=>'View Bitacora', 'url'=>array('view', 'id'=>$model->BIT_ID)),
	array('label'=>'Manage Bitacora', 'url'=>array('admin')),
);
?>

<h1>Update Bitacora <?php echo $model->BIT_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>