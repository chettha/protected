<?php
/* @var $this JournalImpactFactorController */
/* @var $data JournalImpactFactor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('impf_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->impf_id), array('view', 'id'=>$data->impf_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_title')); ?>:</b>
	<?php echo CHtml::encode($data->full_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_title')); ?>:</b>
	<?php echo CHtml::encode($data->journal_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issn')); ?>:</b>
	<?php echo CHtml::encode($data->issn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impact_factor')); ?>:</b>
	<?php echo CHtml::encode($data->impact_factor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_cites')); ?>:</b>
	<?php echo CHtml::encode($data->total_cites); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citableitems')); ?>:</b>
	<?php echo CHtml::encode($data->citableitems); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('impf_year')); ?>:</b>
	<?php echo CHtml::encode($data->impf_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('impf_update')); ?>:</b>
	<?php echo CHtml::encode($data->impf_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('debug')); ?>:</b>
	<?php echo CHtml::encode($data->debug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_categories')); ?>:</b>
	<?php echo CHtml::encode($data->subject_categories); ?>
	<br />

	*/ ?>

</div>