<?php
$this->breadcrumbs=array(
	'Favoritos'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Favorito','url'=>array('index')),
array('label'=>'Manage Favorito','url'=>array('admin')),
);
?>

<h1>Create Favorito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>