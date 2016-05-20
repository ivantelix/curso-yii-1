<?php
$this->breadcrumbs=array(
	'Pregunta Secretas'=>array('index'),
	$model->id_pregunta_secreta,
);

$this->menu=array(
array('label'=>'List PreguntaSecreta','url'=>array('index')),
array('label'=>'Create PreguntaSecreta','url'=>array('create')),
array('label'=>'Update PreguntaSecreta','url'=>array('update','id'=>$model->id_pregunta_secreta)),
array('label'=>'Delete PreguntaSecreta','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pregunta_secreta),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage PreguntaSecreta','url'=>array('admin')),
);
?>

<h1>View PreguntaSecreta #<?php echo $model->id_pregunta_secreta; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_pregunta_secreta',
		'pregunta_secreta',
),
)); ?>
