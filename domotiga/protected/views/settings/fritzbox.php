<?php
/* @var $this SettingsFritzboxController */
/* @var $model SettingsFritzbox */
/* @var $form bootstrap.widgets.TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-fritz-box-fritzbox-form',
    	'type'=>'horizontal',
)); ?>

<fieldset>
<legend>Fritz!Box Settings</legend>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->checkBoxRow($model,'enabled'); ?>
		<?php echo $form->error($model,'enabled'); ?>

		<?php echo $form->textFieldRow($model,'tcphost'); ?>
		<?php echo $form->error($model,'tcphost'); ?>

		<?php echo $form->checkBoxRow($model,'debug'); ?>
		<?php echo $form->error($model,'debug'); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
