<?php
/* @var $this SupervisorController */
/* @var $data Supervisor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SUP_ID), array('view', 'id'=>$data->SUP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RUT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_PASSWORD); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_APELLIDO_M')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_APELLIDO_M); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_EMAIL); ?>
	<br />
	
	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_ESTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_PROFESION')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_PROFESION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_CARGO')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_CARGO); ?>
	<br />

	*/ ?>

</div>