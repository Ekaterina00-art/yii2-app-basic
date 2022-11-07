<?php

use yii\db\Migration;

/**
 * Class m220119_161720_insert_user
 */
class m220119_161720_insert_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{actor}}";
        $this->insert('actor', array('level_id' => 8, 'name' => 'Екатерина', 'lastname' => 'Шклярова','birthday' => '2000/03/30'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161720_insert_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161720_insert_user cannot be reverted.\n";

        return false;
    }
    */
}
