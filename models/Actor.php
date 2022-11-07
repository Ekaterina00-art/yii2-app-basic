<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $id
 * @property int $level_id
 * @property string|null $name
 * @property string|null $lastname
 * @property string|null $birthday
 *
 * @property Learned[] $learneds
 * @property Level $level
 * @property Login[] $logins
 * @property Story[] $stories
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level_id'], 'required'],
            [['level_id'], 'integer'],
            [['birthday'], 'safe'],
            [['name'], 'string', 'max' => 25],
            [['lastname'], 'string', 'max' => 35],
            [['level_id'], 'exist', 'skipOnError' => true, 'targetClass' => Level::className(), 'targetAttribute' => ['level_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_id' => 'Level ID',
            'name' => 'Name',
            'lastname' => 'Lastname',
            'birthday' => 'Birthday',
            //'level' => 'llevel',
        ];
    }

    /**
     * Gets query for [[Learneds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLearneds()
    {
        return $this->hasMany(Learned::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Level]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLevel()
    {
        return $this->hasOne(Level::className(), ['id' => 'level_id']);
    }

    /**
     * Gets query for [[Logins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLogins()
    {
        return $this->hasMany(Login::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Stories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStories()
    {
        return $this->hasMany(Story::className(), ['user_id' => 'id']);
    }

   /* protected function afterSave() {
        parent::afterSave();
            if($this->isNewRecord){  
            // если мы создаем нового пользователя, тогда нам необходимо создать 
            // для него запись в таблице профиля с ссылкой на родительскую таблицу
            $user_level = new Level;
            $user_level->id = $this->level_id;
            $user_level->level_name = $this->level;
            $user_level->save();
            }
            else{
                Level::model()->updateAll(array(
                    'id'=>$this->level_id, "level_name"=>$this->level
                ),'id=:id', array(':id'=> $this->level_id));
            }
    }*/

}
