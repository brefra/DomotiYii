<?php
/* @var $this TriggersController */
/* @var $dataProvider CActiveDataProvider */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        Yii::t('app','Triggers'),
    ),
));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('all-triggers-grid', {
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
    'id'=>'all-triggers-grid',
    'refreshTime'=>Yii::app()->params['refreshTriggers'], // x second refresh as defined in config
    'type'=>'striped condensed',
    'dataProvider'=>$model->search(),
    'template'=>'{items}{pager}{summary}',
    'columns'=>array(
        array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('width'=>'20')),
        array('name'=>'name', 'header'=>Yii::t('app','Name'), 'htmlOptions'=>array('width'=>'150')),
        array('name'=>'description', 'header'=>Yii::t('app','Description'), 'htmlOptions'=>array('width'=>'100')),
        array('name'=>'type',
                'header'=>Yii::t('app','Type'),
                'type' => 'raw',
                'value' => '$data->getTriggerText($data->type)',
                'htmlOptions'=>array('width'=>'100'),
        ),
        array('name'=>'param1', 'header'=>Yii::t('app','Param 1'), 'htmlOptions'=>array('width'=>'50')),
        array('name'=>'param2', 'header'=>Yii::t('app','Param 2'), 'htmlOptions'=>array('width'=>'50')),
        array('name'=>'param3', 'header'=>Yii::t('app','Param 3'), 'htmlOptions'=>array('width'=>'50')),
        array('name'=>'param4', 'header'=>Yii::t('app','Param 4'), 'htmlOptions'=>array('width'=>'50')),
        array('name'=>'param5', 'header'=>Yii::t('app','Param 5'), 'htmlOptions'=>array('width'=>'50')),
        array('class'=>'bootstrap.widgets.TbButtonColumn',
           'template'=> Yii::app()->user->isGuest ? '{view}' : '{view}  {update}  {delete}',
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
