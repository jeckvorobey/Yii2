<?php


namespace app\controllers;


use app\models\RegistrationForm;
use Yii;
use yii\web\Controller;

class RegistrationController extends Controller
{
    public function actionReg(){
        $formModel = new RegistrationForm();
        if($formModel->load(Yii::$app->request->post())){
            print_r($formModel);
        }

        return $this->render('reg', ['model' => $formModel]);
    }
}