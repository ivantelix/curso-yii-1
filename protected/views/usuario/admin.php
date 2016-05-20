<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Usuario','url'=>array('index')),
array('label'=>'Create Usuario','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('usuario-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Panel de Usuarios</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
	'id'=>'usuario-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usuario',
		'usuario',
		'correo',
		'nombre_completo',
		'sitioweb',
		
		'fk_pais' => array(
			'name' => 'fk_pais',
			'value' =>'($data->fk_pais =="")?"N/P" : $data->fkPais->pais ',
			'filter' => CHtml::listData(Pais::model()->findAll(), 'id_pais', 'pais'),
		),
		
		
		'foto_perfil'=>array(
			'type'=>'html',
			'header'=>'Foto',
			'name'=>'foto_perfil',
			'value'=>'CHtml::image(Yii::app()->baseUrl."/images/".$data->foto_perfil,"N/P",
			          array("height"=>"80", "width"=>"80") )',
			'filter' =>'',
		),
		
		
		'fecha_creacion' => array(
			'header'=>'Registrado en',
			'name'=>'fecha_creacion',
			'value' => 'date("d/m/Y", strtotime($data->fecha_creacion))' ,
			'htmlOptions'=>array('width'=>'120px', 'style' => 'text-align: center;'),
		),
		/*
		'biografia',
		'fk_idioma',
		'fk_pais',
		'fk_pregunta_secreta',
		'respuesta_secreta',
		'telefono',
		'foto_perfil',
		'imagen_fondo',
		'activo',
		'fecha_creacion',
		*/
/*
 * array(
'class'=>'booster.widgets.TbButtonColumn',
),
*/

	array(
	'header'=>'Acción',
	'class'=>'booster.widgets.TbButtonColumn',
	'htmlOptions' => array('width' => '85', 'style' => 'text-align: center;color: blue;'),

	'template' => '{ver} {modificar} {eliminar} {pdf} {excel} {miboton}',

	'buttons' => array(


		'miboton' => array(
			'label' => 'Ir a mi acción',
			'icon' => 'glyphicon glyphicon-send',
			'url' => 'Yii::app()->createUrl("usuario/miAccion/", array("id"=>$data->id_usuario))',),


		'ver' => array(
			'label' => 'Ver',
			'icon' => 'eye-open',
			'url' => 'Yii::app()->createUrl("usuario/view/", array("id"=>$data->id_usuario))',),

		'modificar' => array(
			'label' => 'Modificar',
			'icon' => 'glyphicon glyphicon-pencil',
			'url' => 'Yii::app()->createUrl("usuario/update/", array("id"=>$data->id_usuario))',
			//'visible' => '$data->estatus == TRUE',
			),

		'eliminar' => array(
			'label' => 'Eliminar este registro',
			'icon' => 'glyphicon glyphicon-trash',
			'url' => 'Yii::app()->createUrl("usuario/delete/", array("id"=>$data->id_usuario))', 
			),

		'pdf' => array(
			'label' => 'Generar PDF',
			'icon' => 'glyphicon glyphicon-floppy-save',
			'url' => 'Yii::app()->createUrl("usuario/pdf/", array("id"=>$data->id_usuario))', 
			),

		'excel' => array(
			'label' => 'Generar Excel',
			'icon' => 'glyphicon glyphicon-list-alt',
			'url' => 'Yii::app()->createUrl("usuario/excel/", array("id"=>$data->id_usuario))',
			),

	)//fin buttons
),


),
)); ?>
