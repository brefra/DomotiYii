<?php

class EventsactionsController extends Controller
{
        public function actionIndex()
        {
                $model = Eventsactions::model();
                $this->render('index', array('model'=>$model));
        }

        public function actionView($id)
        {
                $model = Eventsactions::model()->findByPk($id);
                $this->render('view', array('model'=>$model));
        }

        public function actionUpdate($id)
        {
                $model = Eventsactions::model()->findByPk($id);
                if(isset($_POST['Eventsactions']))
                {
                        $model->attributes=$_POST['Eventsactions'];
                        if($model->validate())
                        {
                                // form inputs are valid, do something here
                                $this->do_save($model);
                        }
                }
                $this->render('update',array(
                        'model'=>$model,
                ));
        }

        public function actionDelete($id)
        {
                // delete the entry from the "events_actions" table
                $model = Eventsactions::model()->findByPk($id);
                $this->do_delete($model);

        }

        public function actionCreate()
        {
                $model=new Eventsactions;

                // Uncomment the following line if AJAX validation is needed
                // $this->performAjaxValidation($model);

                if(isset($_POST['Eventsactions']))
                {
                        $model->attributes=$_POST['Eventsactions'];
                        if($model->validate())
                        {
                                $this->do_save($model);
                        }
                }
                $this->render('create',array(
                        'model'=>$model,
                ));
        }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

        protected function do_save($model)
        {
                if ( $model->save() === false )
                {
                        Yii::app()->user->setFlash('error', "Saving eventsaction... Failed!");
                } else {
                        Yii::app()->user->setFlash('success', "Saving eventsaction... Successful.");
                }
        }

        protected function do_delete($model)
        {

                if ( $model->delete() === false )
                {
                        Yii::app()->user->setFlash('error', "Deleting eventsaction... Failed!");
                } else {
                        Yii::app()->user->setFlash('success', "Deleting eventsaction... Successful.");
                }
        }

}
