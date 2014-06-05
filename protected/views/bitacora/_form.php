<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bitacora-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'BIT_FECHA'); ?>
		<?php echo $form->textField($model,'BIT_FECHA'); ?>
		<?php echo $form->error($model,'BIT_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALU_RUT'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'ALU_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_ID'); ?>
		<?php echo $form->textField($model,'OFE_ID'); ?>
		<?php echo $form->error($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIT_HORA'); ?>
		<?php echo $form->textField($model,'BIT_HORA'); ?>
		<?php echo $form->error($model,'BIT_HORA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIT_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'BIT_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'BIT_DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->