<script type="text/javascript">
function revisarDigito( dvr )
{	
	dv = dvr + ""	
	if ( dv != '0' && dv != '1' && dv != '2' && dv != '3' && dv != '4' && dv != '5' && dv != '6' && dv != '7' && dv != '8' && dv != '9' && dv != 'k'  && dv != 'K')	
	{		
		alert("Debe ingresar un digito verificador valido");		
		window.document.form1.Alumno_RUT.focus();//window.document		
		window.document.form1.Alumno_RUT.select();
		window.document.form1.Alumno_RUT.value="";			
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
		window.document.form1.Alumno_RUT.focus();		
		window.document.form1.Alumno_RUT.select();		
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
		window.document.form1.Alumno_RUT.focus();		
		window.document.form1.Alumno_RUT.select();
		window.document.form1.Alumno_RUT.value="";	
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
		window.document.form1.Alumno_RUT.focus();		
		window.document.form1.Alumno_RUT.select();
		window.document.form1.Alumno_RUT.value="";	
		return false;	
	}	

	for (i=0; i < largo ; i++ )	
	{			
		if ( texto.charAt(i) !="0" && texto.charAt(i) != "1" && texto.charAt(i) !="2" && texto.charAt(i) != "3" && texto.charAt(i) != "4" && texto.charAt(i) !="5" && texto.charAt(i) != "6" && texto.charAt(i) != "7" && texto.charAt(i) !="8" && texto.charAt(i) != "9" && texto.charAt(i) !="k" && texto.charAt(i) != "K" )
 		{			
			alert("El valor ingresado no corresponde a un R.U.T valido");			
			window.document.form1.Alumno_RUT.focus();			
			window.document.form1.Alumno_RUT.select();			
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

	window.document.form1.Alumno_RUT.value = invertido.toUpperCase()		

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

<h1>Iniciar Sesión</h1>

<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h3 style="color: red; border: 2px solid red;"><?php echo Yii::app()->user->getFlash('mensaje')?></h3>
    <?php    
} ?>



<?php echo CHtml::beginForm('','post',array("id"=>"form","name"=>"form1")); ?>

   
    
     <p>
     	<?php 
		if(Yii::app()->user->hasFlash('rut_error'))
		{
		    ?>
		    <h5 style="color: red;"><?php echo Yii::app()->user->getFlash('rut_error')?></h5>
		    <?php    
		} ?>
        RUT <br><?php echo CHtml::activeTextField($model,'RUT',array("allowEmpty"=>FALSE, 'required'=>'','placeholder'=>'Ej.: 17.123.456-7', 'onkeypress'=>"return permite(event, 'num')", 'onChange'=>"Rut(document.form1.Alumno_RUT.value)", 'onpaste'=>"return false;" , 'ondrop'=>"return false;"));echo CHtml::error($model,'RUT'); ?>
       <hr /> 
    </p>
    
     <p>
     	<?php 
		if(Yii::app()->user->hasFlash('pass_error'))
		{
		    ?>
		    <h5 style="color: red;"><?php echo Yii::app()->user->getFlash('pass_error')?></h5>
		    <?php    
		} ?>
        PASSWORD <br><?php echo CHtml::activePasswordField($model,'PASSWORD');echo CHtml::error($model,'PASSWORD'); ?>
       <hr /> 
    </p>

    <p> 
     <?php echo CHtml::submitButton('submit',array("title"=>"Enviar","value"=>"Enviar")); ?>
    </p>
    
<?php echo CHtml::endForm(); ?>


