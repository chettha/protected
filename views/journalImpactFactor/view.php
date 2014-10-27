<?php
/* @var $this JournalImpactFactorController */
/* @var $model JournalImpactFactor */

$this->breadcrumbs=array(
	'Journal Impact Factors'=>array('index'),
	$model->impf_id,
);

$this->menu=array(
	array('label'=>'List JournalImpactFactor', 'url'=>array('index')),
	array('label'=>'Create JournalImpactFactor', 'url'=>array('create')),
	array('label'=>'Update JournalImpactFactor', 'url'=>array('update', 'id'=>$model->impf_id)),
	array('label'=>'Delete JournalImpactFactor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->impf_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JournalImpactFactor', 'url'=>array('admin')),
);
?>

<h1>View JournalImpactFactor #<?php echo $model->impf_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'impf_id',
		'full_title',
		'journal_title',
		'issn',
		'impact_factor',
		'total_cites',
		'citableitems',
		'impf_year',
		'impf_update',
		'debug',
		'subject_categories',
	),
)); ?>
