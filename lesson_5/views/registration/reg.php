<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin([
    'id' => 'reg-form',
    'options' => ['class' => 'form-horizontal col-lg-5'],
])?>
<?= $form->field($model, 'email')->label('Введите ваш email')->hint('example@mail.com') ?>
<?= $form->field($model, 'username')->label('Придумайте логин') ?>
<?= $form->field($model, 'password')->passwordInput()->label('Придумайте пароль') ?>

<div class="form-group">
    <div class="col-lg-6">
        <?=Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
    </div>
</div>
<?php ActiveForm::end() ?>

