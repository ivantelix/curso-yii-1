<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->id_idioma=>array('view','id'=>$model->id_idioma),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Idioma','url'=>array('index')),
	array('label'=>'Create Idioma','url'=>array('create')),
	array('label'=>'View Idioma','url'=>array('view','id'=>$model->id_idioma)),
	array('label'=>'Manage Idioma','url'=>array('admin')),
	);
	?>

	<h1>Update Idioma <?php echo $model->id_idioma; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>