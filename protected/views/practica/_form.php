<?php
/* @var $this PracticaController */
/* @var $model Practica */
/* @var $form CActiveForm */
$session=new CHttpSession;
$session->open();
$value = $session['RUT'];
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'practica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son Obligatorios</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

		<?php echo $form->labelEx($model,'Rut del Alumno'); ?> 
		<?php echo $form->textField($model,'ALU_RUT',array('value'=>$value, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'ALU_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Oferta'); ?>
		<?php echo $form->dropDownList($model,'OFE_ID',CHtml::listData(OfertaPractica::model()->findAll('OFE_CUPOS > 0'),'OFE_ID', 'OFE_NOMBRE'),array('prompt'=>'Seleccione Oferta...'));?> 
		<?php echo $form->error($model,'OFE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha de Inicio'); ?>
		<?php
			 if($model->PRA_FECHA_INI=='') 
			 {
				 $model->PRA_FECHA_INI=NULL;
 			 }
			 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			 'model'=>$model,
			 'attribute'=>'PRA_FECHA_INI',
			 'value'=>$model->PRA_FECHA_INI,
			 'language' => 'es',
			 'htmlOptions' => array('readonly'=>"readonly"),		 
			 'options'=>array(
			 'autoSize'=>true,
			 'defaultDate'=>$model->PRA_FECHA_INI,
			 'dateFormat'=>'yy-mm-dd',

			 'selectOtherMonths'=>true,
			 'showAnim'=>'slide',
			 'showButtonPanel'=>true,

			 'showOtherMonths'=>true,
			 'changeMonth' => 'true',
			 'changeYear' => 'true',
			 ),
			 )); 
		?>
	<?php echo $form->error($model,'PRA_FECHA_INI'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Fecha de Termino'); ?>
		<?php
			 if($model->PRA_FECHA_FIN=='') 
			 {
				 $model->PRA_FECHA_FIN=NULL;
 			 }
			 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			 'model'=>$model,
			 'attribute'=>'PRA_FECHA_FIN',
			 'value'=>$model->PRA_FECHA_FIN,
			 'language' => 'es',
			 'htmlOptions' => array('readonly'=>"readonly"),		 
			 'options'=>array(
			 'autoSize'=>true,
			 'defaultDate'=>$model->PRA_FECHA_FIN,
			 'dateFormat'=>'yy-mm-dd',
			 'selectOtherMonths'=>true,
			 'showAnim'=>'slide',
			 'showButtonPanel'=>true,

			 'showOtherMonths'=>true,
			 'changeMonth' => 'true',
			 'changeYear' => 'true',
			 ),
			 )); 
		?>	 
		<?php echo $form->error($model,'PRA_FECHA_FIN'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Nota'); ?>
		<?php echo $form->textField($model,'PRA_NOTA',array('value'=>0.0, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'PRA_NOTA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad de Horas'); ?>
		<?php echo $form->textField($model,'PRA_CANT_HORAS',array('value'=>128, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'PRA_CANT_HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'PRA_ESTADO',array('value'=>'Espera','size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PRA_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Pre-Inscribir Práctica' : 'Save'); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->

	

