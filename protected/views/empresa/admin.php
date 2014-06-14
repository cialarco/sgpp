<?php
/* @var $this EmpresaController */
/* @var $model Empresa */


$this->menu=array(
	//array('label'=>'Empresas Registradas', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empresa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Empresas Registradas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empresa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'EMP_RUT',
		//'COM_ID',		
		'EMP_NOMBRE',
		'EMP_DIRECCION',
		array('name'=>'COM_ID',
			 'value'=>'$data->cOM->COM_NOMBRE',
			 'header'=>'Comuna',
			 'filter'=>CHtml::listdata(Comuna::model()->findAll(array('order'=>'COM_NOMBRE ASC')),'COM_ID','COM_NOMBRE')
		),
		'EMP_TELEFONO',
		'EMP_EMAIL',
		/*
		'EMP_DESCRIPCION',
		'EMP_EMAIL',
		'EMP_WEB',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
