<?php

namespace app\models;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property integer $id_role
 * @property string $comment
 * @property string $created_at
 * @property string $ban_date
 * @property integer $status
 * @property string $auth_key
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_role', 'status'], 'integer'],
            [['comment', 'auth_key'], 'string'],
            [['created_at', 'ban_date'], 'safe'],
            [['username'], 'string', 'max' => 45],
            [['password_hash'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'id_role' => 'Id Role',
            'comment' => 'Comment',
            'created_at' => 'Created At',
            'ban_date' => 'Ban Date',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
        ];
    }
}
