<?php

namespace app\models;

use yii\base\Model;
use app\models\User;


class SignupForm extends Model
{
    public $username;
    public $password;
    public $email;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
            return [
                ['username', 'trim'],
                ['username', 'required'],
                ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такое логин уже занят.'],
                ['username', 'string', 'min' => 2, 'max' => 255],
                ['email', 'trim'],
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такая почта уже занята.'],
                ['password', 'required'],
                ['password', 'string', 'min' => 6],
            ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}