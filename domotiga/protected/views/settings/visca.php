<?php
/* @var $this SettingsViscaController */
/* @var $model SettingsVisca */
/* @var $form bootstrap.widgets.TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-visca-visca-form',
	'type'=>'horizontal',
)); ?>

<fieldset>
<legend>Sony VISCA Settings</legend>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->checkBoxRow($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>

		<?php echo $form->textFieldRow($model,'device'); ?>
		<?php echo $form->error($model,'device'); ?>

		<?php echo $form->textFieldRow($model,'cameraaddress'); ?>
		<?php echo $form->error($model,'cameraaddress'); ?>

		<?php echo $form->textFieldRow($model,'serialport'); ?>
		<?php echo $form->error($model,'serialport'); ?>

		<?php echo $form->textFieldRow($model,'baudrate'); ?>
		<?php echo $form->error($model,'baudrate'); ?>

		<?php echo $form->checkBoxRow($model,'debug'); ?>
		<?php echo $form->error($model,'debug'); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
