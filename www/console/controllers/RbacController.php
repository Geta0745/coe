<?php
namespace console\controllers;

use Yii;
use yii\helpers\Console;

class RbacController extends \yii\console\Controller {

    public function actionInit(){

        $auth = Yii::$app->authManager;
        $auth->removeAll();
        Console::output('Removing All! RBAC.....');

        $user = $auth->createRole('User');
        $user->description = 'ผู้ใช้';
        $auth->add($user);
      
        $admin = $auth->createRole('Admin');
        $admin->description = 'ผู้ดูแล';
        $auth->add($admin);
      
    
        $auth->addChild($admin, $user);
      
        $auth->assign($admin, 1);
        $auth->assign($user, 2);
      
        Console::output('Success! RBAC roles has been added.');
      
      }

}
?>