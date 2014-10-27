<?php
/* @var $this JournalScimagoController */
/* @var $model JournalScimago */

$this->breadcrumbs=array(
	'Journal Scimagos'=>array('index'),
	$model->title=>array('view','id'=>$model->scimago_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JournalScimago', 'url'=>array('index')),
	array('label'=>'Create JournalScimago', 'url'=>array('create')),
	array('label'=>'View JournalScimago', 'url'=>array('view', 'id'=>$model->scimago_id)),
	array('label'=>'Manage JournalScimago', 'url'=>array('admin')),
);
?>

<h1>Update JournalScimago <?php echo $model->scimago_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>