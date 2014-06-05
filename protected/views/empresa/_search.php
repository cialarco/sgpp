<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_ID'); ?>
		<?php echo $form->textField($model,'COM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_NOMBRE'); ?>
		<?php echo $form->textField($model,'EMP_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_DIRECCION'); ?>
		<?php echo $form->textField($model,'EMP_DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_TELEFONO'); ?>
		<?php echo $form->textField($model,'EMP_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_CELULAR'); ?>
		<?php echo $form->textField($model,'EMP_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'EMP_DESCRIPCION',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_EMAIL'); ?>
		<?php echo $form->textField($model,'EMP_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_WEB'); ?>
		<?php echo $form->textField($model,'EMP_WEB',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->