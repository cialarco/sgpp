<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Historial de Supervisores', 'url'=>array('index')),
	array('label'=>'Registrar Supervisor', 'url'=>array('create')),



);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#supervisor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Supervisor</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'supervisor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SUP_ID',
		'SUP_RUT',
		'EMP_RUT',
		//'SUP_PASSWORD',
		'SUP_NOMBRES',
		'SUP_APELLIDO_P',
		
		'SUP_APELLIDO_M',
		'SUP_EMAIL',
		//'SUP_TELEFONO',
		//'SUP_CELULAR',
		'SUP_ESTADO',
		//'SUP_PROFESION',
		//'SUP_CARGO',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
