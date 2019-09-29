<?php
use yii\helpers\Html;
?>

<h1>Задачи на день!</h1>
<p> <?= Html::a('вернуться к календарю', ['/activity']) ?></p>
<div class="tasks">
    <ul>
        <?php foreach ($tasks as $task) {?>
            <li id="task_<?=$task['activityID']?>">
                <h2><?= $task['title']?></h2>
                <p>Описание: <?=$task['body']?></p>
                <?= Html::buttonInput('Редактировать') ?>
                <hr>
            </li>
        <?php }?>
    </ul>
    <?= Html::a('Добавить задачу', ['newtask']) ?>


</div>


