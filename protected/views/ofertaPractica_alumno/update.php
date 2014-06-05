<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $model OfertaPractica_alumno */

$this->breadcrumbs=array(
	'Oferta Practica Alumnos'=>array('index'),
	$model->OFE_ID=>array('view','id'=>$model->OFE_ID),
	'Update',
);

$this->menu=array(

	array('label'=>'Ver Historial de Prácticas', 'url'=>array('index')),
	array('label'=>'Pre-Inscribir Práctica', 'url'=>array('/Practica/create')),
);
?>

<h1>Update OfertaPractica_alumno <?php echo $model->OFE_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>