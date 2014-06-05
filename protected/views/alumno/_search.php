<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ALU_RUT'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAR_ID'); ?>
		<?php echo $form->textField($model,'CAR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_PASSWORD'); ?>
		<?php echo $form->textArea($model,'ALU_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_NOMBRES'); ?>
		<?php echo $form->textField($model,'ALU_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'ALU_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'ALU_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_EMAIL'); ?>
		<?php echo $form->textField($model,'ALU_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_CELULAR'); ?>
		<?php echo $form->textField($model,'ALU_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_TELEFONO'); ?>
		<?php echo $form->textField($model,'ALU_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_AGNIO_INGRESO'); ?>
		<?php echo $form->textField($model,'ALU_AGNIO_INGRESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_PERIODOS_CURSADOS'); ?>
		<?php echo $form->textField($model,'ALU_PERIODOS_CURSADOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_DIRECCION'); ?>
		<?php echo $form->textField($model,'ALU_DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_ESTADO'); ?>
		<?php echo $form->textField($model,'ALU_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->