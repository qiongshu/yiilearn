<?php
namespace app\modules\appstore\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionGreet() {
        return $this->render('greet');
    }
}