<?php

use yii\db\Migration;

/**
 * Class m220119_161736_insert_story
 */
class m220119_161736_insert_story extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{story}}";
        $this->insert('story', array('user_id' => 2, 'data' => '2022/01/25 22:31:05', 'kolvo' => 15));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161736_insert_story cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161736_insert_story cannot be reverted.\n";

        return false;
    }
    */
}
