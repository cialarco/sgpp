<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */

$this->breadcrumbs=array(
	'Coordinadors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Coordinador', 'url'=>array('index')),
	array('label'=>'Create Coordinador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#coordinador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Coordinadors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'coordinador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COO_RUT',
		'CAR_ID',
		'COO_PASSWORD',
		'COO_NOMBRES',
		'COO_APELLIDO_P',
		'COO_APELLIDO_M',
		/*
		'COO_EMAIL',
		'COO_TELEFONO',
		'COO_CELULAR',
		'COO_CARGO',
		'COO_ESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
