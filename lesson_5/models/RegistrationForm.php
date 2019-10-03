<?php


namespace app\models;


use app\models\Users;
use yii\db\ActiveRecord;

class RegistrationForm extends ActiveRecord
{
    public $username;
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unicaleEmail'],
            ['username', 'unicaleUserName']
        ];
    }

    public function unicaleEmail() {
        $findEmail = Users::find()->where(['email' => $this->email])->one();

        if($findEmail){
            $this->addError('email', 'Такой email уже существует');
        };
;
    }

    public function unicaleUserName() {
        $findUser = Users::find()->where(['username' => $this->username])->one();

        if($findUser){
            $this->addError('username', 'Такой пользователь уже существует');
        };

    }
}