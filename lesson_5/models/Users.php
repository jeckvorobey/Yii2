<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $authKey
 * @property string $accessToken
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Activity[] $activities
 * @property Avatars[] $avatars
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'password_reset_token', 'authKey', 'accessToken'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'email', 'password_hash', 'authKey', 'accessToken'], 'string', 'max' => 255],
            [['password_reset_token'], 'string', 'max' => 15],
            [['password_reset_token'], 'unique'],
            [['email'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActivities()
    {
        return $this->hasMany(Activity::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAvatars()
    {
        return $this->hasMany(Avatars::className(), ['user_id' => 'id']);
    }
}
