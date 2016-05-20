<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_pregunta_secreta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pregunta_secreta),array('view','id'=>$data->id_pregunta_secreta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta_secreta')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta_secreta); ?>
	<br />


</div>