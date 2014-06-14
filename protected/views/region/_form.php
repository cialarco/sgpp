<?php
/* @var $this RegionController */
/* @var $model Region */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'region-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_ID'); ?>
		<?php echo $form->textField($model,'REG_ID'); ?>
		<?php echo $form->error($model,'REG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAIS_ID'); ?>
		<?php echo $form->textField($model,'PAIS_ID'); ?>
		<?php echo $form->error($model,'PAIS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_NOMBRE'); ?>
		<?php echo $form->textField($model,'REG_NOMBRE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'REG_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REG_SIMBOLO'); ?>
		<?php echo $form->textField($model,'REG_SIMBOLO',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'REG_SIMBOLO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->