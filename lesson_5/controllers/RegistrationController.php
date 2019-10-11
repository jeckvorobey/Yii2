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
                return $this->controller->redirect([Url::to(['index'])]);
            }
        }

        return $this->render('reg', ['model' => $formModel]);
    }
}