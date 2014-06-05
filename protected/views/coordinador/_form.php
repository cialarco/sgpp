<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'coordinador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_RUT'); ?>
		<?php echo $form->textField($model,'COO_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'COO_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAR_ID'); ?>
		<?php echo $form->textField($model,'CAR_ID'); ?>
		<?php echo $form->error($model,'CAR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_PASSWORD'); ?>
		<?php echo $form->textArea($model,'COO_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'COO_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_NOMBRES'); ?>
		<?php echo $form->textField($model,'COO_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COO_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'COO_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COO_APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'COO_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COO_APELLIDO_M'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_EMAIL'); ?>
		<?php echo $form->textField($model,'COO_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'COO_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_TELEFONO'); ?>
		<?php echo $form->textField($model,'COO_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'COO_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_CELULAR'); ?>
		<?php echo $form->textField($model,'COO_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'COO_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_CARGO'); ?>
		<?php echo $form->textField($model,'COO_CARGO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COO_CARGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_ESTADO'); ?>
		<?php echo $form->textField($model,'COO_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'COO_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->