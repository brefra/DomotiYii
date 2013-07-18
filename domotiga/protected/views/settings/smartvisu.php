<?php
/* @var $this SettingsSmartvisuController */
/* @var $model SettingsSmartvisu */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'login-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<fieldset>
<legend>Smartvisuserver Settings</legend>

	<?php echo $form->checkBoxControlGroup($model,'enabled', array('value'=>-1)); ?>
	<?php echo $form->numberFieldControlGroup($model,'tcpport'); ?>
	<?php echo $form->checkBoxControlGroup($model,'debug', array('value'=>-1)); ?>

</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton('Reset'),
)); ?>
<?php $this->endWidget(); ?>