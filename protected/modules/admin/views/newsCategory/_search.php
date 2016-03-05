<?php
/* @var $this NewsCategoryController */
/* @var $model NewsCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'news_category_id'); ?>
		<?php echo $form->textField($model,'news_category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'news_category_topic'); ?>
		<?php echo $form->textField($model,'news_category_topic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datecreate'); ?>
		<?php echo $form->textField($model,'datecreate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->