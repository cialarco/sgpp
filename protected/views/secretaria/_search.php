<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SEC_RUT'); ?>
		<?php echo $form->textField($model,'SEC_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_PASSWORD'); ?>
		<?php echo $form->textArea($model,'SEC_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_NOMBRES'); ?>
		<?php echo $form->textField($model,'SEC_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'SEC_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'SEC_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_EMAIL'); ?>
		<?php echo $form->textField($model,'SEC_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_TELEFONO'); ?>
		<?php echo $form->textField($model,'SEC_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_CELULAR'); ?>
		<?php echo $form->textField($model,'SEC_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEC_ESTADO'); ?>
		<?php echo $form->textField($model,'SEC_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->