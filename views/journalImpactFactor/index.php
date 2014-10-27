<?php
/* @var $this JournalImpactFactorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Journal Impact Factors',
);

$this->menu=array(
	array('label'=>'Create JournalImpactFactor', 'url'=>array('create')),
	array('label'=>'Manage JournalImpactFactor', 'url'=>array('admin')),
);
?>

<h1>Journal Impact Factors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
