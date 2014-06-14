<script type="text/javascript">
function revisarDigito( dvr )
{	
	dv = dvr + ""	
	if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')	
	{		
		alert("Debe ingresar un digito verificador valido");		
		window.document.form1.Empresa_EMP_RUT.focus();//window.document		
		window.document.form1.Empresa_EMP_RUT.select();
		window.document.form1.Empresa_EMP_RUT.value="";			
		return false;	
	}	
	return true;
}
</script>
<script type="text/javascript">
function revisarDigito2( crut )
{	
	largo = crut.length;	
	if ( largo < 2 )	
	{		
		alert("Debe ingresar el rut completo")		
		window.document.form1.Empresa_EMP_RUT.focus();		
		window.document.form1.Empresa_EMP_RUT.select();		
		return false;	
	}	
	if ( largo > 2 )		
		rut = crut.substring(0, largo - 1);	
	else		
		rut = crut.charAt(0);	
	dv = crut.charAt(largo-1);	
	revisarDigito( dv );	

	if ( rut == null || dv == null )
		return 0	

	var dvr = '0'	
	suma = 0	
	mul  = 2	

	for (i= rut.length -1 ; i >= 0; i--)	
	{	
		suma = suma + rut.charAt(i) * mul		
		if (mul == 7)			
			mul = 2		
		else    			
			mul++	
	}	
	res = suma % 11	
	if (res==1)		
		dvr = 'k'	
	else if (res==0)		
		dvr = '0'	
	else	
	{		
		dvi = 11-res		
		dvr = dvi + ""	
	}
	if ( dvr != dv.toLowerCase() )	
	{		
		alert("EL rut es incorrecto")		
		window.document.form1.Empresa_EMP_RUT.focus();		
		window.document.form1.Empresa_EMP_RUT.select();
		window.document.form1.Empresa_EMP_RUT.value="";	
		return false	
	}

	return true
}
</script>
<script type="text/javascript">
function Rut(texto)
{	
	var tmpstr = "";	
	for ( i=0; i < texto.length ; i++ )		
		if ( texto.charAt(i) != ' ' && texto.charAt(i) != '.' && texto.charAt(i) != '-' )
			tmpstr = tmpstr + texto.charAt(i);	
	texto = tmpstr;	
	largo = texto.length;	

	if ( largo < 7 )	
	{		
		alert("Debe ingresar el rut completo")		
		window.document.form1.Empresa_EMP_RUT.focus();		
		window.document.form1.Empresa_EMP_RUT.select();
		window.document.form1.Empresa_EMP_RUT.value="";	
		return false;	
	}	

	for (i=0; i < largo ; i++ )	
	{			
		if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
 		{			
			alert("El valor ingresado no corresponde a un R.U.T valido");			
			window.document.form1.Empresa_EMP_RUT.focus();			
			window.document.form1.Empresa_EMP_RUT.select();			
			return false;		
		}	
	}	

	var invertido = "";	
	for ( i=(largo-1),j=0; i>=0; i--,j++ )		
		invertido = invertido + texto.charAt(i);	
	var dtexto = "";	
	dtexto = dtexto + invertido.charAt(0);	
	dtexto = dtexto + '-';	
	cnt = 0;	

	for ( i=1,j=2; i<largo; i++,j++ )	
	{		
		//alert("i=[" + i + "] j=[" + j +"]" );		
		if ( cnt == 3 )		
		{			
			dtexto = dtexto + '.';			
			j++;			
			dtexto = dtexto + invertido.charAt(i);			
			cnt = 1;		
		}		
		else		
		{				
			dtexto = dtexto + invertido.charAt(i);			
			cnt++;		
		}	
	}	

	invertido = "";	
	for ( i=(dtexto.length-1),j=0; i>=0; i--,j++ )		
		invertido = invertido + dtexto.charAt(i);	

	window.document.form1.Empresa_EMP_RUT.value = invertido.toUpperCase()		

	if ( revisarDigito2(texto) )		
		return true;	

	return false;
}
</script>


<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>

<script type="text/javascript">
			function permite(elEvento, permitidos) {
			  // Variables que definen los caracteres permitidos
			  var numeros = "0123456789Kk.-";
			  var caracteres = "";
			  //var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
			  var numeros_caracteres = numeros + caracteres;
			  var teclas_especiales = [8, 9, 37, 39, 46];
			  // 9 = Tab, 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha			 
			 
			  // Seleccionar los caracteres a partir del parámetro de la función
			  switch(permitidos) {
				 case 'num':
					permitidos = numeros;
					break;
				 case 'car':
					permitidos = caracteres;
					break;
				 case 'num_car':
					permitidos = numeros_caracteres;
					break;
			  }
			 
			  // Obtener la tecla pulsada 
			  var evento = elEvento || window.event;
			  var codigoCaracter = evento.charCode || evento.keyCode;
			  var caracter = String.fromCharCode(codigoCaracter);
			 
			  // Comprobar si la tecla pulsada es alguna de las teclas especiales
			  // (teclas de borrado y flechas horizontales)
			  var tecla_especial = false;
			  for(var i in teclas_especiales) {
				 if(codigoCaracter == teclas_especiales[i]) {
					tecla_especial = true;
					break;
				 }
			  }
			 
			  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
			  // o si es una tecla especial
			  return permitidos.indexOf(caracter) != -1 || tecla_especial;
				/* Sólo números agregar / alfinal del input
				<input type="text" id="texto" onkeypress="return permite(event, 'num')" >

				// Sólo letras
				<input type="text" id="texto" onkeypress="return permite(event, 'car')" >

				// Sólo letras o números
				<input type="text" id="texto" onkeypress="return permite(event, 'num_car')" >*/
			}
</script>
<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	//'name'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('name'=> 'form1'),
)); ?>
	<p class="note">Campos con <span class="required">*</span> son Obligatorios.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>12,'maxlength'=>12, 'placeholder'=>'Ej.: 18.107.501-5', 'onkeypress'=>"return permite(event, 'num')", 'onChange'=>"Rut(document.form1.Empresa_EMP_RUT.value)", 'onpaste'=>"return false;" , 'ondrop'=>"return false;")); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_NOMBRE'); ?>
		<?php echo $form->textField($model,'EMP_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'EMP_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php //$modelRubro = new Rubro();?>
		<?php //$modelGiro = new Giro();?>
		<?php echo $form->labelEx($modelRubro,'RUB_ID'); ?>
		<?php echo $form->dropDownList($modelRubro,'RUB_ID',
			CHtml::listData(Rubro::model()->findAll('RUB_PADRE >= 1'),'RUB_ID', 'RUB_NOMBRE'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('empresa/select_rub'),
					'update'=>'#'.CHtml::activeId($modelGiro, 'GIR_ID'),
				),'prompt'=>'Seleccione Rubro...'

				));
			
		?> 
		<?php //echo CHtml::activeerror($modelPro,'PRO_ID');?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($modelGiro,'GIR_ID'); ?>
		<?php echo $form->dropDownList($modelGiro,'GIR_ID', array('prompt'=>'Seleccione Giro...'));?> 
		<?php //echo $form->dropDownList($model,'COM_ID', CHtml::listData(Comuna::model()->findAll('PRO_ID=? ',array($Provincia->PRO_ID)),'COM_ID', 'COM_NOMBRE'), array('prompt'=>'Seleccione Comuna...'));?> 
		<?php //echo $form->error($model,'COM_ID'); ?>
	</div>

	
	<div class="row">
		<?php //$modelReg = new Region();?>
		<?php //$modelProv = new Provincia();?>
		<?php echo $form->labelEx($modelReg,'REG_ID'); ?>
		<?php echo $form->dropDownList($modelReg,'REG_ID',
			CHtml::listData(Region::model()->findAll(''),'REG_ID', 'REG_NOMBRE'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('empresa/select_reg'),
					'update'=>'#'.CHtml::activeId($modelProv,'PRO_ID'),

				),'prompt'=>'Seleccione Región...'

				));
		?> 
		<?php //echo CHtml::activeerror($modelReg,'REG_ID');?>
	</div>

	<div class="row">
		
		<?php echo $form->labelEx($modelProv,'PRO_ID'); ?>
		<?php
			if(isset($modelReg->REG_ID)){
				echo $form->dropDownList($modelProv,'PRO_ID', 
										CHtml::listData(
											Provincia::model()->findAll(
											'REG_ID = :id_uno',	array(':id_uno'=>$modelReg->REG_ID)),
											'PRO_ID', 'PRO_NOMBRE'), 
										array(
											'ajax'=>array(
												'type'=>'POST',
												'url'=>CController::createUrl('empresa/select_pro'),
												'update'=>'#'.CHtml::activeId($model, 'COM_ID'),
											),'prompt'=>'Seleccione Provincia...'

											));
			}
			else{
				echo $form->dropDownList($modelProv,'PRO_ID', array(''=>'Seleccione Provincia...'),array(
																'ajax'=>array(
																	'type'=>'POST',
																	'url'=>CController::createUrl('empresa/select_pro'),
																	'update'=>'#'.CHtml::activeId($model, 'COM_ID'),
																)

																));
			}
		?>
		<?php /*echo $form->dropDownList($modelProv,'PRO_ID',
			CHtml::listData(Provincia::model()->findAll(''),'PRO_ID', 'PRO_NOMBRE'),
			array(
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('empresa/select_pro'),
					'update'=>'#'.CHtml::activeId($model, 'COM_ID'),
				),'prompt'=>'Seleccione Provincia...'

				));*/
			
		?> 
		<?php //echo CHtml::activeerror($modelPro,'PRO_ID');?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'COM_ID'); ?>
		<?php //echo $form->dropDownList($model,'COM_ID', array('prompt'=>'Seleccione Comuna...'));?>
		<?php
			if(isset($modelProv->PRO_ID)){
				echo $form->dropDownList($model,'COM_ID', CHtml::listData(Comuna::model()->findAll('PRO_ID = :id_uno',array(':id_uno'=>$modelProv->PRO_ID)),'COM_ID', 'COM_NOMBRE'), array('prompt'=>'Seleccione Comuna...'));
			}
			else{
				echo $form->dropDownList($model,'COM_ID', array('prompt'=>'Seleccione Comuna...'));
			}
		?>
		<?php //echo $form->dropDownList($model,'COM_ID', CHtml::listData(Comuna::model()->findByAttributes('PRO_ID=? ',array($modelProv->PRO_ID)),'COM_ID', 'COM_NOMBRE'), array('prompt'=>'Seleccione Comuna...'));?> 
		<?php echo $form->error($model,'COM_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_DIRECCION'); ?>
		<?php echo $form->textField($model,'EMP_DIRECCION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMP_DIRECCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_TELEFONO'); ?>
		<?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'EMP_TELEFONO',
	    
 		'charMap' => array('1'=>'[0-9]'),

		'mask' => '111-1111111',
		'htmlOptions' => array('size' => 12)    ));?>
		<?php echo $form->error($model,'EMP_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_CELULAR'); ?>
		<?php $this->widget('CMaskedTextField', array(
		'model' => $model,
		'attribute' => 'EMP_CELULAR',
 		'charMap' => array('1'=>'[0-9]'),

		'mask' => '+56911111111',
		'htmlOptions' => array('size' => 12)	));?>
		<?php echo $form->error($model,'EMP_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'EMP_DESCRIPCION',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'EMP_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_EMAIL'); ?>
		<?php echo $form->textField($model,'EMP_EMAIL',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'EMP_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_WEB'); ?>
		<?php echo $form->textField($model,'EMP_WEB',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'EMP_WEB'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registar Empresa' : 'Save'); ?>
	</div>




<?php $this->endWidget(); ?>

</div><!-- form -->
