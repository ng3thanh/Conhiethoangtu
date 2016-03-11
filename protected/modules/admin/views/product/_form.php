<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data'
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_name'); ?>
		<?php echo $form->textField($model,'pro_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pro_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_id'); ?>
		<?php echo $form->dropDownList($model,'cat_id',$catdata,array('empty'=>'Chọn mục lục của sản phẩm')); ?>
		<?php echo $form->error($model,'cat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image2'); ?>
		<?php echo $form->fileField($model,'image2'); ?>
		<?php echo $form->error($model,'image2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image3'); ?>
		<?php echo $form->fileField($model,'image3'); ?>
		<?php echo $form->error($model,'image3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php 
		$this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'description',
			'language'=>'vi',
			'theme'=>'default',
			'editorTemplate'=>'full',
		));
 		?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php 
		$this->widget('application.extensions.ckeditor.CKEditor', array(
			'model'=>$model,
			'attribute'=>'content',
			'language'=>'vi',
			'theme'=>'default',
			'editorTemplate'=>'full',
		));
 		?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metakey'); ?>
		<?php echo $form->textArea($model,'metakey',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metakey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadescription'); ?>
		<?php echo $form->textArea($model,'metadescription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metadescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datecreate'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    			'model' => $model,
    			'attribute' => 'datecreate',
				'options'=>array(
					'dateFormat' => 'dd - mm - yy'
				),
    			'htmlOptions' => array(
        			'size' => '10',         // textField size
        			'maxlength' => '10',    // textField maxlength
    			),
			));
		?>
		<?php echo $form->error($model,'datecreate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->