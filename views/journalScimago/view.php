<?php
/* @var $this JournalScimagoController */
/* @var $model JournalScimago */

$this->breadcrumbs=array(
	'Journal Scimagos'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List JournalScimago', 'url'=>array('index')),
	array('label'=>'Create JournalScimago', 'url'=>array('create')),
	array('label'=>'Update JournalScimago', 'url'=>array('update', 'id'=>$model->scimago_id)),
	array('label'=>'Delete JournalScimago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->scimago_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JournalScimago', 'url'=>array('admin')),
);
?>

<h1>View JournalScimago #<?php echo $model->scimago_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'scimago_id',
		'type',
		'subject_area',
		'subject_category',
		'subject_code',
		'title',
		'issn',
		'Q',
		'sjr',
		'h_index',
		'total_docs_2012',
		'total_docs_3years',
		'total_refs',
		'total_cites_3years',
		'citable_docs_3years',
		'cites_doc_2years',
		'ref_doc',
		'country',
		'year',
		'apply_time',
	),
)); ?>
