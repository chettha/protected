<?php
/* @var $this JournalImpactFactorController */
/* @var $model JournalImpactFactor */

$this->breadcrumbs=array(
	'Journal Impact Factors'=>array('index'),
	$model->impf_id=>array('view','id'=>$model->impf_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JournalImpactFactor', 'url'=>array('index')),
	array('label'=>'Create JournalImpactFactor', 'url'=>array('create')),
	array('label'=>'View JournalImpactFactor', 'url'=>array('view', 'id'=>$model->impf_id)),
	array('label'=>'Manage JournalImpactFactor', 'url'=>array('admin')),
);
?>

<h1>Update JournalImpactFactor <?php echo $model->impf_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>