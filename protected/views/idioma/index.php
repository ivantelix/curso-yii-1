<?php
$this->breadcrumbs=array(
	'Idiomas',
);

$this->menu=array(
array('label'=>'Create Idioma','url'=>array('create')),
array('label'=>'Manage Idioma','url'=>array('admin')),
);
?>

<h1>Idiomas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
