<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_idioma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_idioma),array('view','id'=>$data->id_idioma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idioma')); ?>:</b>
	<?php echo CHtml::encode($data->idioma); ?>
	<br />


</div>