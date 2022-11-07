<?php

use yii\db\Migration;

/**
 * Class m220119_173447_insert_level
 */
class m220119_173447_insert_level extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{level}}";
        $this->insert('level', array('level_name' => 'A1 — Elementary'));
        $this->insert('level', array('level_name' => 'A2 — Pre-Intermediate'));
        $this->insert('level', array('level_name' => 'B1 — Intermediate'));
        $this->insert('level', array('level_name' => 'B2 — Upper-Intermediate'));
        $this->insert('level', array('level_name' => 'C1 — Advanced'));
        $this->insert('level', array('level_name' => 'C2 — Proficiency'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_173447_insert_level cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_173447_insert_level cannot be reverted.\n";

        return false;
    }
    */
}
