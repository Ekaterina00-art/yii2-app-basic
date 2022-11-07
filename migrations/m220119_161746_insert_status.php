<?php

use yii\db\Migration;

/**
 * Class m220119_161746_insert_status
 */
class m220119_161746_insert_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{status}}";
        $this->insert('status', array('name_status' => 'Выучил(а)'));
        $this->insert('status', array('name_status' => 'Не выучил(а)'));
        $this->insert('status', array('name_status' => 'Повтор изученного'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161746_insert_status cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161746_insert_status cannot be reverted.\n";

        return false;
    }
    */
}
