<?php
/* @var $this SettingsHomematicController */
/* @var $model SettingsHomematic */
/* @var $form bootstrap.widgets.TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-homematic-homematic-form',
	'type'=>'horizontal',
)); ?>

<fieldset>
<legend>HomeMatic Settings</legend>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->checkBoxRow($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>

		<?php echo $form->textFieldRow($model,'tcphost'); ?>
		<?php echo $form->error($model,'tcphost'); ?>

		<?php echo $form->textFieldRow($model,'tcpport'); ?>
		<?php echo $form->error($model,'tcpport'); ?>

		<?php echo $form->textFieldRow($model,'model'); ?>
		<?php echo $form->error($model,'model'); ?>

		<?php echo $form->textFieldRow($model,'hmid'); ?>
		<?php echo $form->error($model,'hmid'); ?>

		<?php echo $form->checkBoxRow($model,'debug'); ?>
		<?php echo $form->error($model,'debug'); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
