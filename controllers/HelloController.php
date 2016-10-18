<?php
namespace app\controllers;

class HelloController extends \yii\web\Controller
{
    public function actionFirst() {
        //echo "<h1>Hello Controller</h1>";
        $title="Hello First View";
        return $this->render('first',['title'=>$title]);
    }
}

