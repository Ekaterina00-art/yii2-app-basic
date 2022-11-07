<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "word".
 *
 * @property int $id
 * @property int $topic_id
 * @property string|null $russian
 * @property string|null $english
 * @property string|null $img
 *
 * @property Learned[] $learneds
 * @property Topic $topic
 */
class Word extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'word';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['topic_id'], 'required'],
            [['topic_id'], 'integer'],
            [['russian', 'english'], 'string', 'max' => 50],
            [['img'], 'string', 'max' => 125],
            [['topic_id'], 'exist', 'skipOnError' => true, 'targetClass' => Topic::className(), 'targetAttribute' => ['topic_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topic_id' => 'Topic ID',
            'russian' => 'Russian',
            'english' => 'English',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[Learneds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLearneds()
    {
        return $this->hasMany(Learned::className(), ['word_id' => 'id']);
    }

    /**
     * Gets query for [[Topic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(Topic::className(), ['id' => 'topic_id']);
    }
}
