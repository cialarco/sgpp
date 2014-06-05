<?php
/* @var $this Practica_adminController */
/* @var $model Practica */

$this->breadcrumbs=array(
	'Practicas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Ver Prácticas Activas', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#practica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Prácticas</h1>

<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'practica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ALU_RUT',
		'OFE_ID',
		'PRA_FECHA_INI',
		'PRA_FECHA_FIN',
		'PRA_INF_EVALUACION',
		'PRA_INF_ALUMNO',
		'PRA_ESTADO',
		/*
		'PRA_INF_ALUMNO',
		'PRA_NOTA',
		'PRA_CANT_HORAS',
		'PRA_ESTADO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
