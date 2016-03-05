<?php
/* @var $this SlideController */
/* @var $model Slide */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'slide-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'slide_link'); ?>
		<?php echo $form->textField($model,'slide_link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slide_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slide_image'); ?>
		<?php echo $form->textField($model,'slide_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'slide_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slide_ordinal'); ?>
		<?php echo $form->textField($model,'slide_ordinal'); ?>
		<?php echo $form->error($model,'slide_ordinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->