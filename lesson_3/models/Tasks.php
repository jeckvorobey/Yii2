<?php


namespace app\models;


use yii\base\Model;

class Tasks extends Model
{
    public $activityID;
    public $title;
    public $body;
    public $block;

    public function attributeLabels()
    {
        return [
            [
                'activityID' => '1',
                'title' => 'Событие 1',
                'body' => 'Это первое событие',
                'block' => false
            ],
            [
                'activityID' => '2',
                'title' => 'Событие 2',
                'body' => 'Это второе событие',
                'block' => false
            ],
            [
                'activityID' => '3',
                'title' => 'Событие 3',
                'body' => 'Это третье событие',
                'block' => false
            ],
        ];
    }

}