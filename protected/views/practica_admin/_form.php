<?php
/* @var $this Practica_adminController */
/* @var $model Practica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'practica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Rut del Alumno'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'ALU_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id de Oferta'); ?>
		<?php echo $form->textField($model,'OFE_ID',array('readonly'=>'false')); ?>
		<?php echo $form->error($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha de Inicio'); ?>
		<?php echo $form->textField($model,'PRA_FECHA_INI'); ?>
		<?php echo $form->error($model,'PRA_FECHA_INI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha de Termino'); ?>
		<?php echo $form->textField($model,'PRA_FECHA_FIN'); ?>
		<?php echo $form->error($model,'PRA_FECHA_FIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nota'); ?>
		<?php echo $form->textField($model,'PRA_NOTA'); ?>
		<?php echo $form->error($model,'PRA_NOTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Practica total de horas'); ?>
		<?php echo $form->textField($model,'PRA_CANT_HORAS'); ?>
		<?php echo $form->error($model,'PRA_CANT_HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'PRA_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PRA_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->