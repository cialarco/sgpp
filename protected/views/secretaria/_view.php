<?php
/* @var $this SecretariaController */
/* @var $data Secretaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SEC_RUT), array('view', 'id'=>$data->SEC_RUT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_APELLIDO_M')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_APELLIDO_M); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_TELEFONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEC_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->SEC_ESTADO); ?>
	<br />

	*/ ?>

</div>