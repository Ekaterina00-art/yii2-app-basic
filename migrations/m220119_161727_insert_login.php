<?php

use yii\db\Migration;

/**
 * Class m220119_161727_insert_login
 */
class m220119_161727_insert_login extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{login}}";
        $this->insert('login', array('user_id' => 2, 'email' => 'katya.shklyarova.00@mail.ru','password'=>'helpmePl'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161727_insert_login cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161727_insert_login cannot be reverted.\n";

        return false;
    }
    */
}
