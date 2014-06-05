

<h1>Bitacora Coordinador</h1>

<?php echo CHtml::link('atras',array('index')); ?>

<table>
<tr>
<td><b>ID: </b><?php echo $bitacoras->BIT_ID ;?></td>
<td><b>Fecha emicion: </b><?php echo $bitacoras->BIT_FECHA ;?></td>
<td><b>Rut Empresa:</b> <?php echo $bitacoras->EMP_RUT ;?></td>
</tr>
<tr>
<td> <b>Rut Alumno:</b> <?php echo $bitacoras->ALU_RUT ;?></td>
<td><b>Nombres:</b><?php echo $bitacoras->ALU_NOMBRES;?></td>
<td><b>Apellido Paterno:</b><?php echo $bitacoras->ALU_APELLIDO_P;?></td>
<td><b>Apellido Materno:</b><?php echo $bitacoras->ALU_APELLIDO_M;?></td>
</tr>
<tr>
<td colspan='3' ><b>Descripción: </b>
<?php 
echo '<pre>';
echo $bitacoras->BIT_DESCRIPCION ;
echo '</pre>';
?>
</td> </tr>
</table>