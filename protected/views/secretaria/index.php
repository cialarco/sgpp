<?php
/* @var $this SecretariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secretarias',
);

$this->menu=array(
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>Secretarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
