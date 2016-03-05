<?php
/* @var $this NewsCategoryController */
/* @var $data NewsCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_category_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_category_id), array('view', 'id'=>$data->news_category_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('news_category_topic')); ?>:</b>
	<?php echo CHtml::encode($data->news_category_topic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreate')); ?>:</b>
	<?php echo CHtml::encode($data->datecreate); ?>
	<br />


</div>