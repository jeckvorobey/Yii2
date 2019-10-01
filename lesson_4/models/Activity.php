<?php

namespace app\models;

use yii\base\Model;
/**
 * Activity класс
 *
 * Отражает сущность хранимого в календаре события
 */
class Activity extends Model
{
    /**
     * Название события
     *
     * @var string
     */
    public $title;
    /**
     * День начала события. Хранится в Unix timestamp
     *
     * @var int
     */
    public $startDay;
    /**
     * День завершения события. Хранится в Unix timestamp
     *
     * @var int
     */
    public $endDay;
    /**
     * ID автора, создавшего события
     *
     * @var int
     */
    public $idAuthor;
    /**
     * Описание события
     *
     * @var string
     */
    public $body;
    /**
     * Блокировка событием
     *
     * @var boolean
     */
   public $block;

    public function attributeLabels()
    {
        return [
            'title' => 'Событие 2',
            'startDay' => '1569448800',
            'endDay' => '1569887940',
            'idAuthor' => '10001',
            'body' => 'Это первое событие',
            'block' => false
        ];
    }
}