<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%topic}}`.
 */
class m220118_191935_create_topic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%topic}}', [
            'id' => $this->primaryKey(),
            'name_topic'=> $this->string(35),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%topic}}');
    }
}
