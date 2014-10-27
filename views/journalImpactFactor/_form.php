<?php
/* @var $this JournalImpactFactorController */
/* @var $model JournalImpactFactor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'journal-impact-factor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'full_title'); ?>
		<?php echo $form->textArea($model,'full_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'full_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'journal_title'); ?>
		<?php echo $form->textArea($model,'journal_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'journal_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issn'); ?>
		<?php echo $form->textField($model,'issn',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'issn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impact_factor'); ?>
		<?php echo $form->textField($model,'impact_factor',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'impact_factor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_cites'); ?>
		<?php echo $form->textField($model,'total_cites'); ?>
		<?php echo $form->error($model,'total_cites'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'citableitems'); ?>
		<?php echo $form->textField($model,'citableitems'); ?>
		<?php echo $form->error($model,'citableitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impf_year'); ?>
		<?php echo $form->textField($model,'impf_year'); ?>
		<?php echo $form->error($model,'impf_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'impf_update'); ?>
		<?php echo $form->textField($model,'impf_update'); ?>
		<?php echo $form->error($model,'impf_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'debug'); ?>
		<?php echo $form->textField($model,'debug',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'debug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_categories'); ?>
		<?php echo $form->textField($model,'subject_categories',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'subject_categories'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->