<?php


namespace app\controllers;


use app\models\RegistrationForm;
use Yii;
use yii\helpers\Url;
use yii\web\Controller;

class RegistrationController extends Controller
{
    public function actionReg()
    {
        $formModel = new RegistrationForm();
        if (Yii::$app->request->isPost && $formModel->load(Yii::$app->request->post())) {
            if ($formModel->save()) {
                return Yii::$app->response->redirect('/');
            }
        }

        return $this->render('reg', ['model' => $formModel]);
    }

    public function actionLogOut()
    {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect('/');
    }
}