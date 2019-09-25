<?php


namespace app\models;


use yii\base\Model;

class Day extends Model
{
    /**
     * Данный буднего или рабочего дня
     *
     * @var string
     */
    public $theDay;

    public function ofTheDay(){
        $now = date('N');

        if($now === 6 || $now === 7){
            $this->theDay = 'выходной день';
        }else {
            $this->theDay = 'будний день';
        }

        return $this->theDay;
    }
}