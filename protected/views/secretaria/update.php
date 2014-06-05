<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	$model->SEC_RUT=>array('view','id'=>$model->SEC_RUT),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'View Secretaria', 'url'=>array('view', 'id'=>$model->SEC_RUT)),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>Update Secretaria <?php echo $model->SEC_RUT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>