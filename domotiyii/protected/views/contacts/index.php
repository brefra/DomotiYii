<?php
/* @var $this ContactsController */
/* @var $dataProvider CActiveDataProvider */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Contacts'),
    ),
));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('all-contacts-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

$this->beginWidget('zii.widgets.CPortlet', array(
        'htmlOptions'=>array(
                'class'=>''
        )
));
$this->widget('bootstrap.widgets.TbNav', array(
        'type'=>TbHtml::NAV_TYPE_PILLS,
        'items'=>array(
                array('label'=>Yii::t('app','List'), 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array()),
                array('label'=>Yii::t('app','Search'), 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
                array('label'=>Yii::t('app','Create'), 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
        ),
));
$this->endWidget();
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
        'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('domotiyii.LiveGridView', array(
    'id'=>'all-contacts-grid',
    'refreshTime'=>Yii::app()->params['refreshContacts'], // x second refresh as defined in config
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>'{items}{pager}{summary}',
    'columns'=>array(
        array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('width'=>'20')),
        array('name'=>'name', 'header'=>Yii::t('app','Name'), 'htmlOptions'=>array('width'=>'150')),
        array('name'=>'address', 'header'=>Yii::t('app','Street'), 'htmlOptions'=>array('width'=>'40')),
        array('name'=>'zipcode', 'header'=>Yii::t('app','PostalCode'), 'htmlOptions'=>array('width'=>'40')),
        array('name'=>'city', 'header'=>Yii::t('app','City'), 'htmlOptions'=>array('width'=>'40')),
        array('name'=>'phoneno', 'header'=>Yii::t('app','Phone no.'), 'htmlOptions'=>array('width'=>'40')),
        array('name'=>'mobileno', 'header'=>Yii::t('app','Mobile no.'), 'htmlOptions'=>array('width'=>'40')),
	 array(
            'name' => 'email',
	'header'=>Yii::t('app','e-mail'),
	'htmlOptions'=>array('width'=>'40'),
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->email), "mailto:".CHtml::encode($data->email))',
        ),

        array('class'=>'bootstrap.widgets.TbButtonColumn',
           'template'=> Yii::app()->user->isGuest ? '{view}' : '{view} {update} {delete}',
           'header'=>Yii::t('app','Actions'),
           'htmlOptions'=>array('style'=>'width: 40px'),
           'buttons'=>array(
              'view' => array(
                 'label'=>Yii::t('app','View'),
                 'url'=>'Yii::app()->controller->createUrl("view", array("id"=>$data["id"]))',
              ),
              'update' => array(
                 'label'=>Yii::t('app','Edit'),
                 'url'=>'Yii::app()->controller->createUrl("update", array("id"=>$data["id"]))',
              ),
              'delete' => array(
                 'label'=>Yii::t('app','Delete'),
                 'url'=>'Yii::app()->controller->createUrl("delete", array("id"=>$data["id"],"command"=>"delete"))',
              ),
           ),
        ),
    ),
));
?>
