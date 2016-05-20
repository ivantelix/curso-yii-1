<?php
$this->breadcrumbs=array(
	'Pregunta Secretas'=>array('index'),
	$model->id_pregunta_secreta=>array('view','id'=>$model->id_pregunta_secreta),
	'Update',
);

	$this->menu=array(
	array('label'=>'List PreguntaSecreta','url'=>array('index')),
	array('label'=>'Create PreguntaSecreta','url'=>array('create')),
	array('label'=>'View PreguntaSecreta','url'=>array('view','id'=>$model->id_pregunta_secreta)),
	array('label'=>'Manage PreguntaSecreta','url'=>array('admin')),
	);
	?>

	<h1>Update PreguntaSecreta <?php echo $model->id_pregunta_secreta; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>