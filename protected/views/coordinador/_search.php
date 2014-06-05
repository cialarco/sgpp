<?php
/* @var $this CoordinadorController */
/* @var $model Coordinador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COO_RUT'); ?>
		<?php echo $form->textField($model,'COO_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAR_ID'); ?>
		<?php echo $form->textField($model,'CAR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_PASSWORD'); ?>
		<?php echo $form->textArea($model,'COO_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_NOMBRES'); ?>
		<?php echo $form->textField($model,'COO_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'COO_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'COO_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_EMAIL'); ?>
		<?php echo $form->textField($model,'COO_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_TELEFONO'); ?>
		<?php echo $form->textField($model,'COO_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_CELULAR'); ?>
		<?php echo $form->textField($model,'COO_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_CARGO'); ?>
		<?php echo $form->textField($model,'COO_CARGO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_ESTADO'); ?>
		<?php echo $form->textField($model,'COO_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->