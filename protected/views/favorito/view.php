<?php
$this->breadcrumbs=array(
	'Favoritos'=>array('index'),
	$model->id_favorito,
);

$this->menu=array(
array('label'=>'List Favorito','url'=>array('index')),
array('label'=>'Create Favorito','url'=>array('create')),
array('label'=>'Update Favorito','url'=>array('update','id'=>$model->id_favorito)),
array('label'=>'Delete Favorito','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_favorito),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Favorito','url'=>array('admin')),
);
?>

<h1>View Favorito #<?php echo $model->id_favorito; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_favorito',
		'favorito',
		'usuario',
		'fecha_creacion',
),
)); ?>
