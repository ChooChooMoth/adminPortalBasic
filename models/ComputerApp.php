<?php

namespace app\models;

/**
 * This is the model class for table "computer_app".
 *
 * @property integer $computer_id
 * @property integer $app_id
 * @property integer $id
 */
class ComputerApp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computer_app';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['app_id', 'exist', 'targetClass' => '\app\models\Applications'],
            ['computer_id', 'exist', 'targetClass' => '\app\models\Computers'],
            [['computer_id', 'app_id'], 'required'],
            [['computer_id','app_id'], 'unique', 'targetAttribute' => ['computer_id','app_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comp_name' => 'Computer Name',
            'app_name' => 'Application Name',
            'computer_id' => 'Computer ID',
            'app_id' => 'App ID',
            'id' => 'ID',
        ];
    }
}
