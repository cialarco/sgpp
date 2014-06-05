<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Campos con <span class="required">*</span> son Obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT de la Empresa'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>	
	
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'COM_ID'); ?>
		<?php echo $form->textField($model,'COM_ID'); ?>
		<?php echo $form->error($model,'COM_ID'); ?>
	</div>
	-->

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'EMP_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'EMP_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comuna (Ordenadas Norte <=> Sur)'); ?>
		<?php echo $form->dropDownList($model,'COM_ID',CHtml::listData(Comuna::model()->findAll(''),'COM_ID', 'COM_NOMBRE'),array('prompt'=>'Seleccione Comuna...'));?> 
		<?php echo $form->error($model,'COM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dirección'); ?>
		<?php echo $form->textField($model,'EMP_DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMP_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fono'); ?>
		<?php echo $form->textField($model,'EMP_TELEFONO',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'EMP_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fono-Móvil'); ?>
		<?php echo $form->textField($model,'EMP_CELULAR',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'EMP_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripción de la Empresa'); ?>
		<?php echo $form->textField($model,'EMP_DESCRIPCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'EMP_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMAIL Empresarial'); ?>
		<?php echo $form->textField($model,'EMP_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'EMP_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WEB Empresarial'); ?>
		<?php echo $form->textField($model,'EMP_WEB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMP_WEB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registar Empresa' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->