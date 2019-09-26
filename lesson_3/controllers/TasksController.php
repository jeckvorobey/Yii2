<?php


namespace app\controllers;


use app\models\Tasks;
use yii\base\Controller;

class TasksController extends Controller
{
    public function actionIndex(){
        $tasksTheDay = new Tasks();
        return $this->render('index', [
            'tasks' => $tasksTheDay->attributeLabels(),
        ]);
    }

    public function actionNewtask(){
        $task = new Tasks();
        return $this->render('newtask', ['model' => $task->title]);
    }
}