<?php
use yii\helpers\Html;
?>

<h1><?=Html::encode($model['title']); ?></h1>
  <p style="color: #00aa00" > Сегодня <?= $day ; ?> </p>

<?php if($model['startDay'] == $model['endDay']): ?>
    <p>Событие на <?=date("d.m.Y", $model['startDay'])?></p>
<?php else: ?>
    <p>Событие c <?=date("d.m.Y", $model['startDay'])?>
       <?php $model['endDay']?></p>
<?php endif; ?>

<p class="desk">Описание события:  <?= Html::encode($model['body']);?></p>



