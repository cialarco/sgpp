<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_RUT'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'ALU_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAR_ID'); ?>
		<?php echo $form->textField($model,'CAR_ID'); ?>
		<?php echo $form->error($model,'CAR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_PASSWORD'); ?>
		<?php echo $form->textArea($model,'ALU_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ALU_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_NOMBRES'); ?>
		<?php echo $form->textField($model,'ALU_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ALU_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'ALU_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ALU_APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'ALU_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ALU_APELLIDO_M'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_EMAIL'); ?>
		<?php echo $form->textField($model,'ALU_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ALU_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_CELULAR'); ?>
		<?php echo $form->textField($model,'ALU_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ALU_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_TELEFONO'); ?>
		<?php echo $form->textField($model,'ALU_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ALU_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_AGNIO_INGRESO'); ?>
		<?php echo $form->textField($model,'ALU_AGNIO_INGRESO'); ?>
		<?php echo $form->error($model,'ALU_AGNIO_INGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_PERIODOS_CURSADOS'); ?>
		<?php echo $form->textField($model,'ALU_PERIODOS_CURSADOS'); ?>
		<?php echo $form->error($model,'ALU_PERIODOS_CURSADOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_DIRECCION'); ?>
		<?php echo $form->textField($model,'ALU_DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ALU_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_ESTADO'); ?>
		<?php echo $form->textField($model,'ALU_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ALU_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->