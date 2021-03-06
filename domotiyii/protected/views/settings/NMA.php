<?php
/* @var $this SettingsNMAController */
/* @var $model SettingsNMA */
/* @var $form CActiveForm */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Modules') => '../index',
        Yii::t('app','NotifyMyAndroid'),
    ),
)); ?>

<legend>NotifyMyAndroid</legend>
<?php $this->beginWidget('zii.widgets.CPortlet', array(
        'htmlOptions'=>array(
                'class'=>''
        )
));
$this->widget('bootstrap.widgets.TbNav', array(
        'type'=>TbHtml::NAV_TYPE_PILLS,
        'items'=>array(
		 array('label'=>Yii::t('app','Send test PushMsg'), 'icon'=>'icon-envelope', 'url'=>Yii::app()->controller->createUrl('sendtestnma'),'active'=>false, 'linkOptions'=>array()),
                array('label'=>Yii::t('app','NotifyMyAndroid'), 'icon'=>'icon-globe', 'url'=>'https://www.notifymyandroid.com', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>Yii::t('app','Your NotifyMyAndroid'), 'icon'=>'icon-globe', 'url'=>'https://www.notifymyandroid.com/login.jsp', 'linkOptions'=>array('target'=>'_blank')),
                array('label'=>Yii::t('app','Register for API'), 'icon'=>'icon-globe', 'url'=>'https://www.notifymyandroid.com/register.jsp', 'linkOptions'=>array('target'=>'_blank')),
        ),
));
$this->endWidget();

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'settings-nma-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
)); ?>

<fieldset>
		<?php echo $form->checkBoxControlGroup($model,'enabled', array('value'=>-1)); ?>
		<?php echo $form->textFieldControlGroup($model,'apikey', array('class'=>'span5')); ?>
		<?php echo $form->textFieldControlGroup($model,'application'); ?>
		<?php echo $form->textFieldControlGroup($model,'event'); ?>
		<?php echo $form->checkBoxControlGroup($model,'debug', array('value'=>-1, 'help'=>Yii::t('app','To get a free account/API key click \'Register for API\''))); ?>
</fieldset>

<?php echo TbHtml::formActions(array(
    TbHtml::submitButton(Yii::t('app','Submit'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton(Yii::t('app','Reset')),
)); ?>
<?php $this->endWidget(); ?>
