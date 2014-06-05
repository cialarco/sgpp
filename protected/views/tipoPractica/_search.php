<?php
/* @var $this TipoPracticaController */
/* @var $model TipoPractica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TPP_ID'); ?>
		<?php echo $form->textField($model,'TPP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TPP_CODIGO'); ?>
		<?php echo $form->textField($model,'TPP_CODIGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAR_ID'); ?>
		<?php echo $form->textField($model,'CAR_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TTP_NOMBRE'); ?>
		<?php echo $form->textField($model,'TTP_NOMBRE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->