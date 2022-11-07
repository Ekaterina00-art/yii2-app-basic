<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m220119_070256_create_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%status}}', [
            'id' => $this->primaryKey(),
            'name_status'=> $this->string(35),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%status}}');
    }
}
