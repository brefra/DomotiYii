<?php
/* @var $this SettingsThermostatController */
/* @var $model SettingsThermostat */
/* @var $form bootstrap.widgets.TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-thermostat-thermostat-form',
	'type'=>'horizontal',
)); ?>

<fieldset>
<legend>Thermostat Settings</legend>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->checkboxRow($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>

		<?php echo $form->textFieldRow($model,'polltime'); ?>
		<?php echo $form->error($model,'polltime'); ?>

		<?php echo $form->checkBoxRow($model,'debug'); ?>
		<?php echo $form->error($model,'debug'); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
