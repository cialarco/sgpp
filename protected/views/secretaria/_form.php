<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secretaria-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_RUT'); ?>
		<?php echo $form->textField($model,'SEC_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'SEC_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_PASSWORD'); ?>
		<?php echo $form->textArea($model,'SEC_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SEC_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_NOMBRES'); ?>
		<?php echo $form->textField($model,'SEC_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SEC_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'SEC_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SEC_APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'SEC_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SEC_APELLIDO_M'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_EMAIL'); ?>
		<?php echo $form->textField($model,'SEC_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SEC_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_TELEFONO'); ?>
		<?php echo $form->textField($model,'SEC_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'SEC_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_CELULAR'); ?>
		<?php echo $form->textField($model,'SEC_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'SEC_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SEC_ESTADO'); ?>
		<?php echo $form->textField($model,'SEC_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SEC_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->