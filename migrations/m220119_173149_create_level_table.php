<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%level}}`.
 */
class m220119_173149_create_level_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%level}}', [
            'id' => $this->primaryKey(),
            'level_name' => $this->string(35),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%level}}');
    }
}
