<?php
/* @var $this DevicesController */
/* @var $model Devices */
/* @var $form CActiveForm */

$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id'=>'edit-devices-form',
        'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
));

$this->widget('bootstrap.widgets.TbTabs', array(
    'id' => 'mytabs',
    'type' => 'tabs',
    'tabs' => array(
            array('id' => 'general', 'label' => Yii::t('app','Main'), 'content' => $this->renderPartial('edit/_general', array('form' => $form, 'model' => $model), true), 'active' => true),
            array('id' => 'icons', 'label' => Yii::t('app','Icons'), 'content' => $this->renderPartial('edit/_icons', array('form' => $form, 'model' => $model) , true)),
            array('id' => 'location', 'label' => Yii::t('app','Location'), 'content' => $this->renderPartial('edit/_location', array('form' => $form, 'model' => $model) , true)),
            array('id' => 'options', 'label' => Yii::t('app','Options'), 'content' => $this->renderPartial('edit/_options', array('form' => $form, 'model' => $model) , true)),
    ),
));

echo TbHtml::formActions(array(
    TbHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton('Reset'),
)); ?>
<?php $this->endWidget(); ?>

