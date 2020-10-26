<?php

namespace app\modules\main\controllers;

use frontend\models\SignupForm;

use yii\web\Response;
use yii\widgets\ActiveForm;


class MainController extends \yii\web\Controller
{
    public $layout = "inner";
    public function actionRegister(){
        $model = new SignupForm();

        if(\Yii::$app->request->isAjax && $model->load(\Yii::$app->request->post())){
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }

        if($model->load(\Yii::$app->request->post()) && $model->signup()){
            print "Success";
            die;
        }
    return $this->render("register",['model' => $model]);

    }


}
