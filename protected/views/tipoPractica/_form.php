<?php
/* @var $this TipoPracticaController */
/* @var $model TipoPractica */
/* @var $form CActiveForm */

$session=new CHttpSession;
$session->open();
$value=$session['RUT'];

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-practica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TPP_CODIGO'); ?>
	
 	
		

		<?php echo $form->textField($model,'TPP_CODIGO'); ?>

	
	
		<?php echo $form->error($model,'TPP_CODIGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAR_ID'); ?>

		<?php $carrera=Coordinador::model()->findByAttributes(array('COO_RUT'=> "$value")); 	?>	
		
		<?php //echo $form->dropDownList($model,'TPP_ID',CHtml::listData(TipoPractica::model()->findAll('CAR_ID=? ',array($carrera->CAR_ID)),'TPP_ID','TTP_NOMBRE'),array('prompt'=>'Seleccione'));?> 



		<?php echo $form->textField($model,'CAR_ID',array('value'=>$carrera->CAR_ID, 'readonly'=>'false')); ?>

	



		<?php echo $form->error($model,'CAR_ID'); ?>
	</div>

	
	

	<div class="row">
		<?php echo $form->labelEx($model,'TTP_NOMBRE'); ?>
		<?php echo $form->textField($model,'TTP_NOMBRE',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'TTP_NOMBRE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->