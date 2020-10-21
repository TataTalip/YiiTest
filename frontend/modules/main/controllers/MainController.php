<?php

namespace app\modules\main\controllers;

use frontend\models\Test2Model;
use yii\base\Model;
use frontend\models\TestModel;

class MainController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }



}
