<?php
/* @var $this CoordinadorController */
/* @var $data Coordinador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COO_RUT), array('view', 'id'=>$data->COO_RUT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->COO_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->COO_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->COO_APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_APELLIDO_M')); ?>:</b>
	<?php echo CHtml::encode($data->COO_APELLIDO_M); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->COO_EMAIL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->COO_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->COO_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_CARGO')); ?>:</b>
	<?php echo CHtml::encode($data->COO_CARGO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->COO_ESTADO); ?>
	<br />

	*/ ?>

</div>