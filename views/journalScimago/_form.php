<?php
/* @var $this JournalScimagoController */
/* @var $model JournalScimago */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'journal-scimago-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_area'); ?>
		<?php echo $form->textArea($model,'subject_area',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'subject_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_category'); ?>
		<?php echo $form->textArea($model,'subject_category',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'subject_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_code'); ?>
		<?php echo $form->textField($model,'subject_code',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'subject_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issn'); ?>
		<?php echo $form->textField($model,'issn',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'issn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Q'); ?>
		<?php echo $form->textField($model,'Q',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'Q'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sjr'); ?>
		<?php echo $form->textField($model,'sjr',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sjr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'h_index'); ?>
		<?php echo $form->textField($model,'h_index',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'h_index'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_docs_2012'); ?>
		<?php echo $form->textField($model,'total_docs_2012',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_docs_2012'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_docs_3years'); ?>
		<?php echo $form->textField($model,'total_docs_3years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_docs_3years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_refs'); ?>
		<?php echo $form->textField($model,'total_refs',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_refs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_cites_3years'); ?>
		<?php echo $form->textField($model,'total_cites_3years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_cites_3years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citable_docs_3years'); ?>
		<?php echo $form->textField($model,'citable_docs_3years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'citable_docs_3years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cites_doc_2years'); ?>
		<?php echo $form->textField($model,'cites_doc_2years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cites_doc_2years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ref_doc'); ?>
		<?php echo $form->textField($model,'ref_doc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ref_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apply_time'); ?>
		<?php echo $form->textField($model,'apply_time'); ?>
		<?php echo $form->error($model,'apply_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->