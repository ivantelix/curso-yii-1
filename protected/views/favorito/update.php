<?php
$this->breadcrumbs=array(
	'Favoritos'=>array('index'),
	$model->id_favorito=>array('view','id'=>$model->id_favorito),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Favorito','url'=>array('index')),
	array('label'=>'Create Favorito','url'=>array('create')),
	array('label'=>'View Favorito','url'=>array('view','id'=>$model->id_favorito)),
	array('label'=>'Manage Favorito','url'=>array('admin')),
	);
	?>

	<h1>Update Favorito <?php echo $model->id_favorito; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>