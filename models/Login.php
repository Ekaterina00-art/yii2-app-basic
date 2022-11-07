<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }
}
