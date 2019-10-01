<?php

use yii\db\Migration;

/**
 * Class m190929_163758_users
 */
class m190929_163758_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'authKey' => $this->string(255)->notNull(),
            'accessToken' => $this->string(255)->notNull(),
            'created_at' => $this->dateTime()->notNull()->defaultValue(date('Y-m-d')),
            'updated_at' => $this->dateTime()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190929_163758_users cannot be reverted.\n";

        return false;
    }
    */
}
