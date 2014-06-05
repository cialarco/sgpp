<?php
/* @var $this SupervisorController */
/* @var $model Supervisor */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supervisor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_RUT'); ?>
		<?php echo $form->textField($model,'SUP_RUT',array('size'=>12,'maxlength'=>12,'placeholder'=>'Ej.: 17.123.456-7')); 
		?>


		<?php echo $form->error($model,'SUP_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RUT'); ?>
		<?php echo $form->dropDownList($model,'EMP_RUT',//array('size'=>12,'maxlength'=>12)
		CHtml::listData(Empresa::model()->findAll(),'EMP_RUT','EMP_RUT'),array('prompt'=>'Seleccione')		); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_PASSWORD'); ?>
		<?php echo $form->textArea($model,'SUP_PASSWORD',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SUP_PASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_NOMBRES'); ?>
		<?php echo $form->textField($model,'SUP_NOMBRES',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SUP_NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_APELLIDO_P'); ?>
		<?php echo $form->textField($model,'SUP_APELLIDO_P',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SUP_APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_APELLIDO_M'); ?>
		<?php echo $form->textField($model,'SUP_APELLIDO_M',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SUP_APELLIDO_M'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_EMAIL'); ?>
		<?php echo $form->textField($model,'SUP_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SUP_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_TELEFONO'); ?>
		<?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'SUP_TELEFONO',
	    
 		'charMap' => array('1'=>'[0-9]'),

		'mask' => '111-1111111',
		'htmlOptions' => array('size' => 12)    ));?>
		<?php echo $form->error($model,'SUP_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_CELULAR'); ?>
		<?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'SUP_CELULAR',
 		'charMap' => array('1'=>'[0-9]'),

		'mask' => '+56911111111',
		'htmlOptions' => array('size' => 12)	));?>
		<?php echo $form->error($model,'SUP_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_ESTADO'); ?>
		<?php echo $form->dropDownList($model,'SUP_ESTADO',array('Activo'=>'Activo','Inactivo'=>'Inactivo')); ?>
		<?php echo $form->error($model,'SUP_ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_PROFESION'); ?>
		<?php echo $form->textField($model,'SUP_PROFESION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SUP_PROFESION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_CARGO'); ?>
		<?php echo $form->textField($model,'SUP_CARGO',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SUP_CARGO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
