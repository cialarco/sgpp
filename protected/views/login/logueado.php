<?php echo '<h1>Bienvenido al Sistema de Gestión de Prácticas Profesionales (SGPP)</h1>';
      echo 'Usuario RUT: '.$session["RUT"].'<br>';?>
<?php echo 'Tipo de Usuario: '.$session["TIPO_USUARIO"];?>
<br/>
<p><?php echo CHtml::link("Cerrar Sesión",
                Yii::app()->request->baseUrl."/index.php/login/cerrar",
                array("class"=>"link","title"=>"Cerrar Sesión"));?>
</p>
