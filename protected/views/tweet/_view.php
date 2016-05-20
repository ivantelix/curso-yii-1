<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_tweet')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tweet),array('view','id'=>$data->id_tweet)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tweet')); ?>:</b>
	<?php echo CHtml::encode($data->tweet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
	<?php echo CHtml::encode($data->usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />


</div>