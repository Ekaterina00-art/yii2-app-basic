<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $id
 * @property string|null $name_topic
 *
 * @property Word[] $words
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_topic'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_topic' => 'Name Topic',
        ];
    }

    /**
     * Gets query for [[Words]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWords()
    {
        return $this->hasMany(Word::className(), ['topic_id' => 'id']);
    }
}
