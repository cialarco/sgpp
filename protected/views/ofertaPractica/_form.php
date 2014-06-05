<?php
/* @var $this OfertaPracticaController */
/* @var $model OfertaPractica */
/* @var $form CActiveForm */
$session=new CHttpSession;
$session->open();
$value=$session['RUT'];


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

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RUT'); ?>
		<?php echo $form->dropDownList($model,'EMP_RUT',//array('size'=>13,'maxlength'=>13)
		CHtml::listData(Empresa::model()->findAll(),'EMP_RUT','EMP_RUT'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('OfertaPractica/select_sup'),
					'update'=>'#'.CHtml::activeId($model,'SUP_ID'), 
		),'prompt'=>'Seleccione'
		)
		); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'SUP_ID'); ?>

		<?php echo $form->dropDownList($model,'SUP_ID',array('prompt'=>'Seleccione')); ?>
		<?php echo $form->error($model,'SUP_ID'); ?>
	</div>

	

	<div class="row">

		<?php echo $form->labelEx($model,'COO_RUT'); ?>
		<?php 
		
		echo $form->textField($model,'COO_RUT',array('value'=>$value, 'readonly'=>'false')); ?>
		<?php echo $form->error($model,'COO_RUT'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'TPP_ID'); ?>
		
       <?php $carrera=Coordinador::model()->findByAttributes(array('COO_RUT'=> "$value")); 	?>


		<?php echo $form->dropDownList($model,'TPP_ID',CHtml::listData(TipoPractica::model()->findAll('CAR_ID=? ',array($carrera->CAR_ID)),'TPP_ID','TTP_NOMBRE'),array('prompt'=>'Seleccione'));?> 

		
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
		<?php echo $form->dropDownList($model,'OFE_ESTADO',array('Activo'=>'Activo','Inactivo'=>'Inactivo')); ?>
		<?php echo $form->error($model,'OFE_ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_CUPOS'); ?>
		<?php echo $form->dropDownList($model,'OFE_CUPOS',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'OFE_CUPOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_FECHA_PUBLICACION'); ?>
		<?php date_default_timezone_set('America/Santiago');
             $fecha = Date('Y-m-d'); ?>
       <?php echo $form->textField($model,'OFE_FECHA_PUBLICACION', array('value'=>$fecha, 'readonly'=>'false')); ?>
		

		<?php echo $form->error($model,'OFE_FECHA_PUBLICACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OFE_FECHA_CADUCA'); ?>
		<?php 
		if($model->OFE_FECHA_CADUCA=='') 
			 {
				 $model->OFE_FECHA_CADUCA=NULL;
 			 }
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			 'model'=>$model,
			 'attribute'=>'OFE_FECHA_CADUCA',
			 'value'=>$model->OFE_FECHA_CADUCA,
			 'language' => 'es',
			 'htmlOptions' => array('readonly'=>"readonly"),		 
			 'options'=>array(
			 'autoSize'=>true,
			 'defaultDate'=>$model->OFE_FECHA_CADUCA,
			 'dateFormat'=>'yy-mm-dd',

			 'selectOtherMonths'=>true,
			 'showAnim'=>'slide',
			 'showButtonPanel'=>true,

			 'showOtherMonths'=>true,
			 'changeMonth' => 'true',
			 'changeYear' => 'true',
			 )
			 )); 
		?>
		<?php echo $form->error($model,'OFE_FECHA_CADUCA',array('OFE_FECHA_CADUCA','compare','OFE_FECHA_PUBLICACION'=>date('Y-m-d'),'operator'=>'>')); ?>
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

<?php
 
?>