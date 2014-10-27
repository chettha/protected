<?php
/* @var $this JournalImpactFactorController */
/* @var $model JournalImpactFactor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'impf_id'); ?>
		<?php echo $form->textField($model,'impf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'full_title'); ?>
		<?php echo $form->textArea($model,'full_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journal_title'); ?>
		<?php echo $form->textArea($model,'journal_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'issn'); ?>
		<?php echo $form->textField($model,'issn',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impact_factor'); ?>
		<?php echo $form->textField($model,'impact_factor',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_cites'); ?>
		<?php echo $form->textField($model,'total_cites'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'citableitems'); ?>
		<?php echo $form->textField($model,'citableitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impf_year'); ?>
		<?php echo $form->textField($model,'impf_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'impf_update'); ?>
		<?php echo $form->textField($model,'impf_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'debug'); ?>
		<?php echo $form->textField($model,'debug',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_categories'); ?>
		<?php echo $form->textField($model,'subject_categories',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->