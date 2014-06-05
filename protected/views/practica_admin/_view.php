<?php
/* @var $this Practica_adminController */
/* @var $data Practica */
?>
<?php
		
	if($data->PRA_ESTADO =="Espera")
	{
?>
		<div class="view">

			<b><?php echo CHtml::encode($data->getAttributeLabel('PRA_ID')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->PRA_ID), array('view', 'id'=>$data->PRA_ID)); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Rut Alumno')); ?>:</b>
			<?php echo CHtml::encode($data->ALU_RUT); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('ID oferta')); ?>:</b>
			<?php echo CHtml::encode($data->OFE_ID); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Inicio')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_FECHA_INI); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Termino')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_FECHA_FIN); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Informe Evaluacion')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_INF_EVALUACION); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Informe Alumno')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_INF_ALUMNO); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Nota')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_NOTA); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad de Horas')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_CANT_HORAS); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
			<?php echo CHtml::encode($data->PRA_ESTADO); ?>
			<br />

		</div>
<?php
	}
?>