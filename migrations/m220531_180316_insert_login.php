<?php

use yii\db\Migration;

/**
 * Class m220531_180316_insert_login
 */
class m220531_180316_insert_login extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('login', array('username' => 'katya.shklyarova.00@mail.ru','password'=>'helpmePl'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220531_180316_insert_login cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220531_180316_insert_login cannot be reverted.\n";

        return false;
    }
    */
}
