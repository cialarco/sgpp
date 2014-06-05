<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	$model->EVE_ID=>array('view','id'=>$model->EVE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'View Eventos', 'url'=>array('view', 'id'=>$model->EVE_ID)),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>Update Eventos <?php echo $model->EVE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>