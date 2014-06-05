<h1>Listado de Bitacoras Alumno</h1>
<?php echo 'Probando la vista index'?>
<br>

<?php echo CHtml::link('nueva bitacora', array('add')) ; ?>


<table>

<tr>
<th>BIT_ID</th>
<th>BIT_FECHA</th>
<th>BIT_HORA</th>
<th>BIT_DESCRIPCION</th>
<th>Ver</th>
</tr>
<?php foreach ($tareas as $t) { ?>
<tr>
<td><?php echo $t->BIT_ID; ?></td>
<td><?php echo $t->BIT_FECHA; ?></td>
<td><?php echo $t->BIT_HORA; ?></td>
<td><?php echo substr($t->BIT_DESCRIPCION, 0,15).'...'; ?></td>
<td><?php echo CHtml::link('Ver',array('view','id'=>$t->BIT_ID)); ?></td>

</tr>
<?php } ?>

</table>