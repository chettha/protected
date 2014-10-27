<?php
/* @var $this JournalImpactFactorController */
/* @var $model JournalImpactFactor */

$this->breadcrumbs=array(
	'Journal Impact Factors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JournalImpactFactor', 'url'=>array('index')),
	array('label'=>'Manage JournalImpactFactor', 'url'=>array('admin')),
);
?>

<h1>Create JournalImpactFactor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>