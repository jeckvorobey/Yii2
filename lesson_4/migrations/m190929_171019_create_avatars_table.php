<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%avatars}}`.
 */
class m190929_171019_create_avatars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('avatars', [
            'id' => $this->primaryKey(),
            'url_avatar' => $this->string(255),
            'user_id' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fr-avatars-user_id',
            'avatars',
            'user_id',
            'users',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('avatars');
    }
}
