<?php
/* @var $this BitacoraController */
/* @var $model Bitacora */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'BIT_ID'); ?>
		<?php echo $form->textField($model,'BIT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BIT_FECHA'); ?>
		<?php echo $form->textField($model,'BIT_FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALU_RUT'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_ID'); ?>
		<?php echo $form->textField($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BIT_HORA'); ?>
		<?php echo $form->textField($model,'BIT_HORA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BIT_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'BIT_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->