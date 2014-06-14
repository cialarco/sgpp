<?php
/* @var $this EmpresaController */
/* @var $model Empresa */


$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->EMP_RUT)),
	array('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>Detalle Empresa: <?php echo $model->EMP_NOMBRE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EMP_RUT',		
		'EMP_NOMBRE',
		'EMP_DIRECCION',
		array('name'=>'COM_ID',
			 'value'=>$model->cOM->COM_NOMBRE,			 
		),
		'EMP_TELEFONO',
		'EMP_CELULAR',
		'EMP_DESCRIPCION',
		'EMP_EMAIL',
		'EMP_WEB',
	),
)); ?>
