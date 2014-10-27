<?php
/* @var $this JournalScimagoController */
/* @var $model JournalScimago */

$this->breadcrumbs=array(
	'Journal Scimagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JournalScimago', 'url'=>array('index')),
	array('label'=>'Manage JournalScimago', 'url'=>array('admin')),
);
?>

<h1>Create JournalScimago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>