<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "story".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $data
 * @property int|null $kolvo
 *
 * @property Actor $user
 */
class Story extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'story';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'kolvo'], 'integer'],
            [['data'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Actor::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'data' => 'Data',
            'kolvo' => 'Kolvo',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Actor::className(), ['id' => 'user_id']);
    }
}
