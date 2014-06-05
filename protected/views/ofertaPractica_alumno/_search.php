<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $model OfertaPractica_alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'OFE_ID'); ?>
		<?php echo $form->textField($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SUP_ID'); ?>
		<?php echo $form->textField($model,'SUP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COO_RUT'); ?>
		<?php echo $form->textField($model,'COO_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TPP_ID'); ?>
		<?php echo $form->textField($model,'TPP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_NOMBRE'); ?>
		<?php echo $form->textField($model,'OFE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'OFE_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_ESTADO'); ?>
		<?php echo $form->textField($model,'OFE_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_CUPOS'); ?>
		<?php echo $form->textField($model,'OFE_CUPOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_FECHA_PUBLICACION'); ?>
		<?php echo $form->textField($model,'OFE_FECHA_PUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_FECHA_CADUCA'); ?>
		<?php echo $form->textField($model,'OFE_FECHA_CADUCA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_TAREAS'); ?>
		<?php echo $form->textArea($model,'OFE_TAREAS',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OFE_AREA_TRABAJO'); ?>
		<?php echo $form->textField($model,'OFE_AREA_TRABAJO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->