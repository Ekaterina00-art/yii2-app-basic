<?php

use yii\db\Migration;

/**
 * Class m220119_161711_insert_word
 */
class m220119_161711_insert_word extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //public $table = "{{word}}";
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Мясо','english'=>'Meat','img'=>'https://irenastyle.ru/wp-content/uploads/2021/01/mayso-v-internet-magazine-scaled.jpg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Чечевица','english'=>'Lentils','img'=>'https://atlas-agro.ca/wp-content/uploads/2019/08/lentils.jpeg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Рыба','english'=>'Fish','img'=>'https://nevrohelp.info/upload/medialibrary/a60/a60baf0a1a3022c6587d13a24d7fa0a5.jpg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Капуста','english'=>'Cabbage','img'=>'https://proroslo.ru/wp-content/uploads/2018/12/weisskabis-buehne.jpg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Помидор','english'=>'Tomato','img'=>'https://avatars.mds.yandex.net/i?id=0418fcd13c818ddc3212595b31240ce5-5477180-images-thumbs&n=13'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Картофель','english'=>'Potato','img'=>'https://fermoved.ru/wp-content/uploads/2017/11/luchshie-sorta-dlya-podmoskovya.jpg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Трюфель','english'=>'Truffle','img'=>'https://static.tildacdn.com/tild3662-3966-4536-b736-663462353566/Truffles_4.jpg'));
        $this->insert('word', array('topic_id' => 1, 'russian' => 'Абрикос','english'=>'Apricot','img'=>'https://biobazar.net.ua/content/images/20/1200x916l80tl0/66782438351674.jpg'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220119_161711_insert_word cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220119_161711_insert_word cannot be reverted.\n";

        return false;
    }
    */
}
