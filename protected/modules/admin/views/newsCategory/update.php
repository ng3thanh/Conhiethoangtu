<?php
/* @var $this NewsCategoryController */
/* @var $model NewsCategory */

$this->breadcrumbs=array(
	'News Categories'=>array('index'),
	$model->news_category_id=>array('view','id'=>$model->news_category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsCategory', 'url'=>array('index')),
	array('label'=>'Create NewsCategory', 'url'=>array('create')),
	array('label'=>'View NewsCategory', 'url'=>array('view', 'id'=>$model->news_category_id)),
	array('label'=>'Manage NewsCategory', 'url'=>array('admin')),
);
?>

<h1>Update NewsCategory <?php echo $model->news_category_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>