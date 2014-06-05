<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_NOMBRE'); ?>
		<?php echo $form->textField($model,'EVE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EVE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'EVE_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'EVE_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_FECHA_PUBLICACION'); ?>
		<?php echo $form->textField($model,'EVE_FECHA_PUBLICACION'); ?>
		<?php echo $form->error($model,'EVE_FECHA_PUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_FECHA_CADUCA'); ?>
		<?php echo $form->textField($model,'EVE_FECHA_CADUCA'); ?>
		<?php echo $form->error($model,'EVE_FECHA_CADUCA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_HORA'); ?>
		<?php echo $form->textField($model,'EVE_HORA'); ?>
		<?php echo $form->error($model,'EVE_HORA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EVE_ESTADO'); ?>
		<?php echo $form->textField($model,'EVE_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'EVE_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->