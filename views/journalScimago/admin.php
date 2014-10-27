<?php
/* @var $this JournalScimagoController */
/* @var $model JournalScimago */

$this->breadcrumbs=array(
	'Journal Scimagos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JournalScimago', 'url'=>array('index')),
	array('label'=>'Create JournalScimago', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#journal-scimago-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Journal Scimagos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'journal-scimago-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'scimago_id',
		'type',
		'subject_area',
		'subject_category',
		'subject_code',
		'title',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
