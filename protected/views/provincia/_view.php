<?php
/* @var $this ProvinciaController */
/* @var $data Provincia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PRO_ID), array('view', 'id'=>$data->PRO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REG_ID')); ?>:</b>
	<?php echo CHtml::encode($data->REG_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRO_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PRO_NOMBRE); ?>
	<br />


</div>