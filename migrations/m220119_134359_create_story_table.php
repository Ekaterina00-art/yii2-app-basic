<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%story}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%actor}}`
 */
class m220119_134359_create_story_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%story}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'data'=> $this->date(),
            'kolvo'=> $this->integer(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-story-user_id}}',
            '{{%story}}',
            'user_id'
        );

        // add foreign key for table `{{%actor}}`
        $this->addForeignKey(
            '{{%fk-story-user_id}}',
            '{{%story}}',
            'user_id',
            '{{%actor}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%actor}}`
        $this->dropForeignKey(
            '{{%fk-story-user_id}}',
            '{{%story}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-story-user_id}}',
            '{{%story}}'
        );

        $this->dropTable('{{%story}}');
    }
}
