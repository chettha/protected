<?php
/* @var $this JournalScimagoController */
/* @var $data JournalScimago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('scimago_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->scimago_id), array('view', 'id'=>$data->scimago_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_area')); ?>:</b>
	<?php echo CHtml::encode($data->subject_area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_category')); ?>:</b>
	<?php echo CHtml::encode($data->subject_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_code')); ?>:</b>
	<?php echo CHtml::encode($data->subject_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issn')); ?>:</b>
	<?php echo CHtml::encode($data->issn); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Q')); ?>:</b>
	<?php echo CHtml::encode($data->Q); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sjr')); ?>:</b>
	<?php echo CHtml::encode($data->sjr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('h_index')); ?>:</b>
	<?php echo CHtml::encode($data->h_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_docs_2012')); ?>:</b>
	<?php echo CHtml::encode($data->total_docs_2012); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_docs_3years')); ?>:</b>
	<?php echo CHtml::encode($data->total_docs_3years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_refs')); ?>:</b>
	<?php echo CHtml::encode($data->total_refs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_cites_3years')); ?>:</b>
	<?php echo CHtml::encode($data->total_cites_3years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citable_docs_3years')); ?>:</b>
	<?php echo CHtml::encode($data->citable_docs_3years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cites_doc_2years')); ?>:</b>
	<?php echo CHtml::encode($data->cites_doc_2years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref_doc')); ?>:</b>
	<?php echo CHtml::encode($data->ref_doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apply_time')); ?>:</b>
	<?php echo CHtml::encode($data->apply_time); ?>
	<br />

	*/ ?>

</div>