<h1>Bitacora </h1>

<?php echo CHtml::link('atras',array('index')); ?>

<table>
 <tr>
 	<td><b>ID: </b><?php echo $model->BIT_ID ;?></td>
 	<td><b>Fecha emicion: </b><?php echo $model->BIT_FECHA ;?></td>
 	<td><b>Rut Alumno:</b> <?php echo $model->ALU_RUT ;?></td>
 	<td><b>Hora:</b><?php echo $model->BIT_HORA ;?></td>
 </tr>
 <tr>
 	<td  colspan="4">
 		<b>Descripcion:</b>
		<?php 
		echo '<pre>';
		print_r($model->BIT_DESCRIPCION)  ;
		echo '</pre>';
		?>
		
 	</td>
 </tr>
 
</table>