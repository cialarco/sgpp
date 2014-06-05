<?php
/* @var $this BitacoraController */
/* @var $data Bitacora */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->BIT_ID), array('view', 'id'=>$data->BIT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIT_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->BIT_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIT_HORA')); ?>:</b>
	<?php echo CHtml::encode($data->BIT_HORA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIT_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->BIT_DESCRIPCION); ?>
	<br />


</div>