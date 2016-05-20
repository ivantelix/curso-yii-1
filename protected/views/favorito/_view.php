<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_favorito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_favorito),array('view','id'=>$data->id_favorito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('favorito')); ?>:</b>
	<?php echo CHtml::encode($data->favorito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />


</div>