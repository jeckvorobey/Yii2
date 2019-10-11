<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m191002_174927_add_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('users', 'password_reset_token', $this->string(15)->notNull()->unique());
        $this->addColumn('users', 'email', $this->string()->notNull()->unique());
        $this->renameColumn('users', 'password', 'password_hash');
        $this->alterColumn('users', 'username', $this->string()->notNull()->unique());
        $this->alterColumn('users', 'created_at', $this->timestamp()->defaultExpression('now()')->notNull());
        $this->alterColumn('users', 'updated_at', $this->timestamp()->defaultExpression('now()')->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('users', 'password_reset_token');
        $this->dropColumn('users', 'email');
    }
}
