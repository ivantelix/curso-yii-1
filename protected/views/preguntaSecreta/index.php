<?php
$this->breadcrumbs=array(
	'Pregunta Secretas',
);

$this->menu=array(
array('label'=>'Create PreguntaSecreta','url'=>array('create')),
array('label'=>'Manage PreguntaSecreta','url'=>array('admin')),
);
?>

<h1>Pregunta Secretas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
