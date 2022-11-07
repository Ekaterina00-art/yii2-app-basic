<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%actor}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%level}}`
 */
class m220119_173327_create_actor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%actor}}', [
            'id' => $this->primaryKey(),
            'level_id' => $this->integer()->notNull(),
            'name' => $this->string(25),
            'lastname' => $this->string(35),
            'birthday' => $this->date(),
        ]);

        // creates index for column `level_id`
        $this->createIndex(
            '{{%idx-actor-level_id}}',
            '{{%actor}}',
            'level_id'
        );

        // add foreign key for table `{{%level}}`
        $this->addForeignKey(
            '{{%fk-actor-level_id}}',
            '{{%actor}}',
            'level_id',
            '{{%level}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%level}}`
        $this->dropForeignKey(
            '{{%fk-actor-level_id}}',
            '{{%actor}}'
        );

        // drops index for column `level_id`
        $this->dropIndex(
            '{{%idx-actor-level_id}}',
            '{{%actor}}'
        );

        $this->dropTable('{{%actor}}');
    }
}
