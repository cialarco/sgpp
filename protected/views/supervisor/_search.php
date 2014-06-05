<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SUP_ID'); ?>
		<?php echo $form->textField($model,'SUP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_RUT'); ?>
		<?php echo $form->textField($model,'SUP_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_PASSWORD'); ?>
		<?php echo $form->textArea($model,'SUP_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_NOMBRES'); ?>
		<?php echo $form->textField($model,'SUP_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'SUP_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'SUP_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_EMAIL'); ?>
		<?php echo $form->textField($model,'SUP_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_TELEFONO'); ?>
		<?php echo $form->textField($model,'SUP_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_CELULAR'); ?>
		<?php echo $form->textField($model,'SUP_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_ESTADO'); ?>
		<?php echo $form->textField($model,'SUP_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_PROFESION'); ?>
		<?php echo $form->textField($model,'SUP_PROFESION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_CARGO'); ?>
		<?php echo $form->textField($model,'SUP_CARGO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->