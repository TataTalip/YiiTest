<?php
namespace frontend\models;

use yii\base\Model;

class TestModel extends  Model {
    public function getImage(){
        return "test_name.png";
    }
}