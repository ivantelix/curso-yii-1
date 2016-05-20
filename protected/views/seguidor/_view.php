<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_seguidor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_seguidor),array('view','id'=>$data->id_seguidor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguidor')); ?>:</b>
	<?php echo CHtml::encode($data->seguidor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siguiendo')); ?>:</b>
	<?php echo CHtml::encode($data->siguiendo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>


	<br/>

	<?php  
		//boton para seguir 
		echo CHtml::ajaxLink('Seguir',
			Yii::app()->createUrl('seguidor/seguir' , array('id' => $data->id_seguidor)),
			array(
				'success'=>'js:function(string){
					$("#btn-seguir-'.$data->id_seguidor.'").fadeOut();
					$("#btn-dejarseguir-'.$data->id_seguidor.'").fadeIn();
				}'
			),
			array(
				'id'=>'btn-seguir-'.$data->id_seguidor,
				'class'=>'btn btn-danger small-btn',
			)
		);

		//boton para dejar de seguir
		echo CHtml::ajaxLink('Dejar de Seguir',
			Yii::app()->createUrl('seguidor/dejarSeguir' , array('id' => $data->id_seguidor)),
			array(
				'success'=>'js:function(string){
					$("#btn-seguir-'.$data->id_seguidor.'").fadeIn();
					$("#btn-dejarseguir-'.$data->id_seguidor.'").fadeOut();
				}'
			),
			array(
				'id' => 'btn-dejarseguir-'.$data->id_seguidor,
				'class' => 'btn btn-info small-btn',
				'confirm'=>'Estas seguro de querer dejar de seguir?'
			)
		);



	?>



</div>