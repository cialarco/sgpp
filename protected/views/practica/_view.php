<?php
/* @var $this PracticaController */
/* @var $data Practica */
$session=new CHttpSession;
$session->open();
?>
	<?php
		$value = $session['RUT'];
		if($data->ALU_RUT ==$value)
		{
	?>
	<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('Rut del Alumno')); ?>:</b>
		<?php echo CHtml::encode($data->ALU_RUT); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('Id de la Oferta')); ?>:</b>
		<?php echo CHtml::encode($data->OFE_ID); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Inicio')); ?>:</b>
		<?php echo CHtml::encode($data->PRA_FECHA_INI); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Termino')); ?>:</b>
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


