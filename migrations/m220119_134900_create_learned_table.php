<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%learned}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%actor}}`
 * - `{{%word}}`
 * - `{{%status}}`
 */
class m220119_134900_create_learned_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%learned}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'word_id' => $this->integer()->notNull(),
            'status_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-learned-user_id}}',
            '{{%learned}}',
            'user_id'
        );

        // add foreign key for table `{{%actor}}`
        $this->addForeignKey(
            '{{%fk-learned-user_id}}',
            '{{%learned}}',
            'user_id',
            '{{%actor}}',
            'id',
            'CASCADE'
        );

        // creates index for column `word_id`
        $this->createIndex(
            '{{%idx-learned-word_id}}',
            '{{%learned}}',
            'word_id'
        );

        // add foreign key for table `{{%word}}`
        $this->addForeignKey(
            '{{%fk-learned-word_id}}',
            '{{%learned}}',
            'word_id',
            '{{%word}}',
            'id',
            'CASCADE'
        );

        // creates index for column `status_id`
        $this->createIndex(
            '{{%idx-learned-status_id}}',
            '{{%learned}}',
            'status_id'
        );

        // add foreign key for table `{{%status}}`
        $this->addForeignKey(
            '{{%fk-learned-status_id}}',
            '{{%learned}}',
            'status_id',
            '{{%status}}',
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
            '{{%fk-learned-user_id}}',
            '{{%learned}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-learned-user_id}}',
            '{{%learned}}'
        );

        // drops foreign key for table `{{%word}}`
        $this->dropForeignKey(
            '{{%fk-learned-word_id}}',
            '{{%learned}}'
        );

        // drops index for column `word_id`
        $this->dropIndex(
            '{{%idx-learned-word_id}}',
            '{{%learned}}'
        );

        // drops foreign key for table `{{%status}}`
        $this->dropForeignKey(
            '{{%fk-learned-status_id}}',
            '{{%learned}}'
        );

        // drops index for column `status_id`
        $this->dropIndex(
            '{{%idx-learned-status_id}}',
            '{{%learned}}'
        );

        $this->dropTable('{{%learned}}');
    }
}
