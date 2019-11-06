<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "massage".
 *
 * @property int $id
 * @property int $id_user
 * @property string $username
 * @property string $massage
 *
 * @property User $user
 */
class MessageForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'username', 'message'], 'required'],
            [['id_user'], 'integer'],
            [['username', 'message'], 'string', 'max' => 225],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'username' => 'Username',
            'massage' => 'Massage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
