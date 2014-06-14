<?php
/* @var $this EmpresaController */
/* @var $model Empresa */


$this->menu=array(
	//array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Detalle Empresa', 'url'=>array('view', 'id'=>$model->EMP_RUT)),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Update Empresa <?php echo $model->EMP_RUT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>