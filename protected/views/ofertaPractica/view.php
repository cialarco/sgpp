<?php
/* @var $this OfertaPracticaController */
/* @var $model OfertaPractica */

$this->breadcrumbs=array(
	'Oferta Practicas'=>array('index'),
	$model->OFE_ID,
);

$this->menu=array(
	array('label'=>'Ver Historial de Ofertas Práctica', 'url'=>array('index')),
	array('label'=>'Registrar Oferta de Práctica', 'url'=>array('create')),
	array('label'=>'Modificar Oferta de Práctica', 'url'=>array('update', 'id'=>$model->OFE_ID)),
	array('label'=>'Eliminar Oferta de Práctica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->OFE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Oferta de Práctica', 'url'=>array('admin')),





);
?>



<h1>Oferta de Práctica  #<?php echo $model->OFE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'OFE_ID',
		'EMP_RUT',
		'SUP_ID',
		'COO_RUT',
		'TPP_ID',
		'OFE_NOMBRE',
		'OFE_DESCRIPCION',
		'OFE_ESTADO',
		'OFE_CUPOS',
		'OFE_FECHA_PUBLICACION',
		'OFE_FECHA_CADUCA',
		'OFE_TAREAS',
		'OFE_AREA_TRABAJO',
	),
)); ?>
