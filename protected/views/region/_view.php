<?php
/* @var $this RegionController */
/* @var $data Region */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->REG_ID), array('view', 'id'=>$data->REG_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAIS_ID')); ?>:</b>
	<?php echo CHtml::encode($data->PAIS_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->REG_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_SIMBOLO')); ?>:</b>
	<?php echo CHtml::encode($data->REG_SIMBOLO); ?>
	<br />


</div>