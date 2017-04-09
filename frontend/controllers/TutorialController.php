<?php

namespace frontend\controllers;

use yii;
use backend\models\Tutorial;
use backend\models\TutorialCategory;

class TutorialController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $view = Yii::$app->view;
        $view->params['bodyid'] = "projectList";
        $category = TutorialCategory::find()
            ->with('tutorials')
            ->all();
//        print_r($category);
        return $this->render('index');
    }


}
