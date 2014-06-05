<?php
/* @var $this OfertaPracticaController */
/* @var $model OfertaPractica */

$this->breadcrumbs=array(
	'Oferta Practicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Ver Historial de Ofertas Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Oferta de Práctica', 'url'=>array('create')),
	array('label'=>'Administrar Oferta de Práctica', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#oferta-practica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Ofertas de Práctica</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'oferta-practica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'OFE_ID',
		'EMP_RUT',
		//'SUP_ID',
		//'COO_RUT',
		'TPP_ID',
		'OFE_NOMBRE',
		
		//'OFE_DESCRIPCION',
		'OFE_ESTADO',
		'OFE_CUPOS',
		'OFE_FECHA_PUBLICACION',
		'OFE_FECHA_CADUCA',
		//'OFE_TAREAS',
		'OFE_AREA_TRABAJO',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
