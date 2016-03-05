<?php
/* @var $this NewsCategoryController */
/* @var $model NewsCategory */

$this->breadcrumbs=array(
	'News Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NewsCategory', 'url'=>array('index')),
	array('label'=>'Manage NewsCategory', 'url'=>array('admin')),
);
?>

<h1>Create NewsCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>