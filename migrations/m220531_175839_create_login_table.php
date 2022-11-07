<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%login}}`.
 */
class m220531_175839_create_login_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%login}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(50),
            'password' => $this->string(8),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%login}}');
    }
}
