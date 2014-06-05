<?php
/* @var $this Practica_adminController */
/* @var $model Practica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id de Práctica'); ?>
		<?php echo $form->textField($model,'PRA_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Rut del Alumno'); ?>
		<?php echo $form->textField($model,'ALU_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id de Oferta'); ?>
		<?php echo $form->textField($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha Inicio'); ?>
		<?php echo $form->textField($model,'PRA_FECHA_INI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha de Termino'); ?>
		<?php echo $form->textField($model,'PRA_FECHA_FIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Informe de Evaluación'); ?>
		<?php echo $form->textArea($model,'PRA_INF_EVALUACION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Informe Alumno'); ?>
		<?php echo $form->textArea($model,'PRA_INF_ALUMNO',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nota'); ?>
		<?php echo $form->textField($model,'PRA_NOTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad de Horas'); ?>
		<?php echo $form->textField($model,'PRA_CANT_HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Estado'); ?>
		<?php echo $form->textField($model,'PRA_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->