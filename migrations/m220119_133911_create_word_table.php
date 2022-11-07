<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%word}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%topic}}`
 */
class m220119_133911_create_word_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%word}}', [
            'id' => $this->primaryKey(),
            'topic_id' => $this->integer()->notNull(),
            'russian'=> $this->string(50),
            'english'=> $this->string(50),
            'img'=> $this->string(125),
        ]);

        // creates index for column `topic_id`
        $this->createIndex(
            '{{%idx-word-topic_id}}',
            '{{%word}}',
            'topic_id'
        );

        // add foreign key for table `{{%topic}}`
        $this->addForeignKey(
            '{{%fk-word-topic_id}}',
            '{{%word}}',
            'topic_id',
            '{{%topic}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%topic}}`
        $this->dropForeignKey(
            '{{%fk-word-topic_id}}',
            '{{%word}}'
        );

        // drops index for column `topic_id`
        $this->dropIndex(
            '{{%idx-word-topic_id}}',
            '{{%word}}'
        );

        $this->dropTable('{{%word}}');
    }
}
