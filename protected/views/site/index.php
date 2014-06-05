<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido al <i>Sistema de Gestión de Prácticas Profesionales (SGPP)</i></h1>

 <br>
 <div align="center">
	<?php
	        $this->widget('application.extensions.slider.slider', array(
	            'container'=>'slideshow',
	            'width'=>750, 
	            'height'=>330, 
	            'timeout'=>3000,
	            'infos'=>false,
	            'constrainImage'=>true,
	            'images'=>array('face.png','face2.jpg'),
	            'alts'=>array('','Facultad de Ciencias Empresariales'),
	            )
	        );
	 ?>
</div>


