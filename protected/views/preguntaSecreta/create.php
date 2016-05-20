<?php
$this->breadcrumbs=array(
	'Pregunta Secretas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List PreguntaSecreta','url'=>array('index')),
array('label'=>'Manage PreguntaSecreta','url'=>array('admin')),
);
?>

<h1>Create PreguntaSecreta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>