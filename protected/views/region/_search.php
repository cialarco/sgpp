<?php
/* @var $this RegionController */
/* @var $model Region */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'REG_ID'); ?>
		<?php echo $form->textField($model,'REG_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAIS_ID'); ?>
		<?php echo $form->textField($model,'PAIS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REG_NOMBRE'); ?>
		<?php echo $form->textField($model,'REG_NOMBRE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REG_SIMBOLO'); ?>
		<?php echo $form->textField($model,'REG_SIMBOLO',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->