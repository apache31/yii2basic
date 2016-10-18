<?php
namespace app\controllers;

class AnamaiController extends \yii\web\Controller
{
    public function actionTest() {
        //echo "<h1>Hello Controller</h1>";
        $title="Send 3x5 to Test view by anamai Controller.";
        
        $a=3;
        $b=5;
        $c=$a*$b;
        
        return $this->render('test',['res'=>$c,'title'=>$title]);
    }
}

