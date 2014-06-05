<h1>Listado de Bitacoras Supervisor</h1>
<?php echo 'Probando la vista'?>

<table>

<tr>
<th>BIT_ID</th>
<th>BIT_FECHA</th>
<th>ALU_RUT</th>
<th>ALU_NOMBRES</th>
<th>ALU_APELLIDO_P</th>
<th>ALU_APELLIDO_M</th>
<th>Descripcion</th>
<th>Ver</th>
</tr>
<?php foreach ($bitacoras as $t) { ?>
<tr>
<td><?php echo $t->BIT_ID; ?></td>
<td><?php echo $t->BIT_FECHA; ?></td>
<td><?php echo $t->ALU_RUT; ?></td>
<td><?php echo $t->ALU_NOMBRES; ?></td>
<td><?php echo $t->ALU_APELLIDO_P; ?></td>
<td><?php echo $t->ALU_APELLIDO_M; ?></td>
<td><?php echo substr($t->BIT_DESCRIPCION, 0,15).'...'; ?></td>
<td><?php echo CHtml::link('Ver',array('viewCoordinador','id'=>$t->BIT_ID)); ?></td>

</tr>
<?php } ?>

</table>