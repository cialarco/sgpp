<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ALU_RUT), array('view', 'id'=>$data->ALU_RUT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_NOMBRES')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_NOMBRES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_APELLIDO_M')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_APELLIDO_M); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_EMAIL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_AGNIO_INGRESO')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_AGNIO_INGRESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_PERIODOS_CURSADOS')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_PERIODOS_CURSADOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALU_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ALU_ESTADO); ?>
	<br />

	*/ ?>

</div>