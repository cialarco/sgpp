<?php
/* @var $this EventosController */
/* @var $data Eventos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EVE_ID), array('view', 'id'=>$data->EVE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_FECHA_PUBLICACION')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_FECHA_PUBLICACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_FECHA_CADUCA')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_FECHA_CADUCA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_HORA')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_HORA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EVE_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->EVE_ESTADO); ?>
	<br />


</div>