<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EVE_ID'); ?>
		<?php echo $form->textField($model,'EVE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_NOMBRE'); ?>
		<?php echo $form->textField($model,'EVE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'EVE_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_FECHA_PUBLICACION'); ?>
		<?php echo $form->textField($model,'EVE_FECHA_PUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_FECHA_CADUCA'); ?>
		<?php echo $form->textField($model,'EVE_FECHA_CADUCA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_HORA'); ?>
		<?php echo $form->textField($model,'EVE_HORA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVE_ESTADO'); ?>
		<?php echo $form->textField($model,'EVE_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->