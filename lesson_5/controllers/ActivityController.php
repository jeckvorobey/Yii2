<?php

namespace app\controllers;

use app\models\Activity;
use app\models\Day;
use Yii;
use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        $activity = new Activity();
        $day  = new Day();
        return $this->render('index', [
            'model' => $activity->attributeLabels(),
            'day' => $day->ofTheDay(),
        ]);
    }
}