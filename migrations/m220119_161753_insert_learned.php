<?php

use yii\db\Migration;

/**
 * Class m220119_161753_insert_learned
 */
class m220119_161753_insert_learned extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = 'learned';
        $this->insert('learned', array('user_id' => 2, 'word_id' => 3, 'status_id' => 1));
        $this->insert('learned', array('user_id' => 2, 'word_id' => 4, 'status_id' => 1));
        $this->insert('learned', array('user_id' => 2, 'word_id' => 5, 'status_id' => 1));
        $this->insert('learned', array('user_id' => 2, 'word_id' => 6, 'status_id' => 1));
        $this->insert('learned', array('user_id' => 2, 'word_id' => 7, 'status_id' => 1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161753_insert_learned cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161753_insert_learned cannot be reverted.\n";

        return false;
    }
    */
}
