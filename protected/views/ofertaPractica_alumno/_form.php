<?php
/* @var $this OfertaPractica_alumnoController */
/* @var $model OfertaPractica_alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oferta-practica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_ID'); ?>
		<?php echo $form->textField($model,'SUP_ID'); ?>
		<?php echo $form->error($model,'SUP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COO_RUT'); ?>
		<?php echo $form->textField($model,'COO_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'COO_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TPP_ID'); ?>
		<?php echo $form->textField($model,'TPP_ID'); ?>
		<?php echo $form->error($model,'TPP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_NOMBRE'); ?>
		<?php echo $form->textField($model,'OFE_NOMBRE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'OFE_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_DESCRIPCION'); ?>
		<?php echo $form->textArea($model,'OFE_DESCRIPCION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OFE_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_ESTADO'); ?>
		<?php echo $form->textField($model,'OFE_ESTADO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'OFE_ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_CUPOS'); ?>
		<?php echo $form->textField($model,'OFE_CUPOS'); ?>
		<?php echo $form->error($model,'OFE_CUPOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_FECHA_PUBLICACION'); ?>
		<?php echo $form->textField($model,'OFE_FECHA_PUBLICACION'); ?>
		<?php echo $form->error($model,'OFE_FECHA_PUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_FECHA_CADUCA'); ?>
		<?php echo $form->textField($model,'OFE_FECHA_CADUCA'); ?>
		<?php echo $form->error($model,'OFE_FECHA_CADUCA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_TAREAS'); ?>
		<?php echo $form->textArea($model,'OFE_TAREAS',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'OFE_TAREAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_AREA_TRABAJO'); ?>
		<?php echo $form->textField($model,'OFE_AREA_TRABAJO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'OFE_AREA_TRABAJO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->