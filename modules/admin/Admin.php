<?php
namespace app\modules\admin;
class Admin extends \yii\base\Module {
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $defaultRoute = 'index';
    public $layout = 'main';
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
}