<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->id_idioma,
);

$this->menu=array(
array('label'=>'List Idioma','url'=>array('index')),
array('label'=>'Create Idioma','url'=>array('create')),
array('label'=>'Update Idioma','url'=>array('update','id'=>$model->id_idioma)),
array('label'=>'Delete Idioma','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_idioma),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Idioma','url'=>array('admin')),
);
?>

<h1>View Idioma #<?php echo $model->id_idioma; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_idioma',
		'idioma',
),
)); ?>
