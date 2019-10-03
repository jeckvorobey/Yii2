<?php


namespace app\controllers;


use app\models\RegistrationForm;
use yii\web\Controller;

class RegistrationController extends Controller
{
    public function actionReg(){
        return $this->render('reg', ['model' => new RegistrationForm()]);
    }
}