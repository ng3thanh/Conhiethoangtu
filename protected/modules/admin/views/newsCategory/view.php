<?php
/* @var $this NewsCategoryController */
/* @var $model NewsCategory */

$this->breadcrumbs=array(
	'News Categories'=>array('index'),
	$model->news_category_id,
);

$this->menu=array(
	array('label'=>'List NewsCategory', 'url'=>array('index')),
	array('label'=>'Create NewsCategory', 'url'=>array('create')),
	array('label'=>'Update NewsCategory', 'url'=>array('update', 'id'=>$model->news_category_id)),
	array('label'=>'Delete NewsCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->news_category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsCategory', 'url'=>array('admin')),
);
?>

<h1>View NewsCategory #<?php echo $model->news_category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'news_category_id',
		'news_category_topic',
		'status',
		'datecreate',
	),
)); ?>
