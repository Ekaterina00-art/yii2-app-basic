<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%login}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%actor}}`
 */
class m220119_134530_create_login_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%login}}', [
            'id' => $this->primaryKey(),
            'email'=> $this->string(50),
            'password'=> $this->string(8),
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
