<?php


namespace app\models;


use yii\base\Model;

class NewTaskForm extends Model
{
    public $taskID;
    public $title;
    public $body;

    public function rules()
    {
        return [

            [['title', 'body'], 'required']
        ];
    }
}