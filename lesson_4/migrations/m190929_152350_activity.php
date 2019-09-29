<?php

use yii\db\Migration;

/**
 * Class m190929_152350_activity
 */
class m190929_152350_activity extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activity', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'date_start' => $this->dateTime(),
            'date_end' => $this->dateTime(),
            'user_id' => $this->integer(),
            'comment' => $this->text(250),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()
        ]);

        $this->addForeignKey(
            'fk-activity-user_id',
            'activity',
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
        $this->dropTable('activity');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190929_152350_activity cannot be reverted.\n";

        return false;
    }
    */
}
