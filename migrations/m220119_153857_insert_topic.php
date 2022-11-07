<?php

use yii\db\Migration;

/**
 * Class m220119_153857_insert_topic
 */
class m220119_153857_insert_topic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = 'topic';
        $this->insert('topic', array('name_topic' => 'Еда'));
        $this->insert('topic', array('name_topic' => 'Фильмы'));
        $this->insert('topic', array('name_topic' => 'Пейзажи'));
        $this->insert('topic', array('name_topic' => 'Электроника'));
        $this->insert('topic', array('name_topic' => 'Одежда'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_153857_insert_topic cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_153857_insert_topic cannot be reverted.\n";

        return false;
    }
    */
}
