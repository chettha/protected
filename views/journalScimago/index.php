<?php
/* @var $this JournalScimagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Journal Scimagos',
);

$this->menu=array(
	array('label'=>'Create JournalScimago', 'url'=>array('create')),
	array('label'=>'Manage JournalScimago', 'url'=>array('admin')),
);
?>

<h1>Journal Scimagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
