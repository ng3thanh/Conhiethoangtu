<?php
/* @var $this SlideController */
/* @var $data Slide */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('slide_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->slide_id), array('view', 'id'=>$data->slide_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slide_link')); ?>:</b>
	<?php echo CHtml::encode($data->slide_link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slide_image')); ?>:</b>
	<?php echo CHtml::encode($data->slide_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slide_ordinal')); ?>:</b>
	<?php echo CHtml::encode($data->slide_ordinal); ?>
	<br />


</div>