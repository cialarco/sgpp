<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EMP_RUT), array('view', 'id'=>$data->EMP_RUT)); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_ID')); ?>:</b>
	<?php echo CHtml::encode($data->cOM->COM_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_DESCRIPCION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_WEB')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_WEB); ?>
	<br />

	*/ ?>

</div>