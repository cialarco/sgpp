<?php
/* @var $this OfertaPracticaController */
// @var $data OfertaPractica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->OFE_ID), array('view', 'id'=>$data->OFE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SUP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->SUP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COO_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->COO_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TPP_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TPP_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_DESCRIPCION); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_ESTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_CUPOS')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_CUPOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_FECHA_PUBLICACION')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_FECHA_PUBLICACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_FECHA_CADUCA')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_FECHA_CADUCA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_TAREAS')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_TAREAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OFE_AREA_TRABAJO')); ?>:</b>
	<?php echo CHtml::encode($data->OFE_AREA_TRABAJO); ?>
	<br />



</div>