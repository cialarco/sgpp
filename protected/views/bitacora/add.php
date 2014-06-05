<h1>Bitácora</h1>

<?php 
$form=$this->beginWidget('CActiveForm');
?>

<div>
<?php echo $form->labelEx($model,'BIT_DESCRIPCION')?><br>
<?php echo $form->textArea($model,'BIT_DESCRIPCION')?>
<?php echo $form->error($model,'BIT_DESCRIPCION')?>
</div>
<?php echo CHtml::submitButton('Crear'); ?>
<?php 
$this->endWidget();
?>