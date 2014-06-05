<?php
/* @var $this TipoPracticaController */
/* @var $data TipoPractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TPP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TPP_ID), array('view', 'id'=>$data->TPP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TPP_CODIGO')); ?>:</b>
	<?php echo CHtml::encode($data->TPP_CODIGO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TTP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TTP_NOMBRE); ?>
	<br />


</div>