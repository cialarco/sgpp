<?php
/* @var $this EmpresaController */
/* @var $model Empresa */


$this->menu=array(
	//array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Crear Empresa', 'url'=>array('create')),
	array('label'=>'Actualizar Empresa', 'url'=>array('update', 'id'=>$model->EMP_RUT)),
	//Sarray('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Empresas', 'url'=>array('admin')),
);
?>

<h1>Detalle Empresa: <?php echo $model->EMP_NOMBRE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>array($model,$modelReg,$modelProv,$modelRubro,$modelGiro),
	'attributes'=>array(
		array('name'=>'RUT',
			 'value'=>$model->EMP_RUT,			 
		),		
		array('name'=>'Nombre',
			 'value'=>$model->EMP_NOMBRE,			 
		),
		array('name'=>'Rubro',
			 'value'=>$modelRubro->RUB_NOMBRE,			 
		),
		array('name'=>'Giro',
			 'value'=>$modelGiro->GIR_NOMBRE,			 
		),
		array('name'=>'Región',
			 'value'=>$modelReg->REG_NOMBRE,			 
		),
		array('name'=>'Provincia',
			 'value'=>$modelProv->PRO_NOMBRE,			 
		),
		array('name'=>'Comuna',
			 'value'=>$model->cOM->COM_NOMBRE,			 
		),
		array('name'=>'Dirección',
			 'value'=>$model->EMP_DIRECCION,			 
		),		
		array('name'=>'Fono',
			 'value'=>$model->EMP_TELEFONO,			 
		),
		array('name'=>'Teléfono Móvil',
			 'value'=>$model->EMP_CELULAR,			 
		),
		array('name'=>'Descripción',
			 'value'=>$model->EMP_DESCRIPCION,			 
		),
		array('name'=>'Email Empresarial',
			 'value'=>$model->EMP_EMAIL,			 
		),
		array('name'=>'Web Empresarial',
			 'value'=>$model->EMP_WEB,			 
		),
	),
)); ?>
