<?php
$this->breadcrumbs=array(
	'Favoritos',
);

$this->menu=array(
array('label'=>'Create Favorito','url'=>array('create')),
array('label'=>'Manage Favorito','url'=>array('admin')),
);
?>

<h1>Favoritos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
