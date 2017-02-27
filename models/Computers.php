<?php

namespace app\models;


/**
 * This is the model class for table "computers".
 *
 * @property integer $computer_id
 * @property string $computer_name
 * @property integer $ip_adress
 * @property string $login
 * @property string $password
 */
class Computers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'computers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip_adress', 'computer_name', 'login', 'password'], 'required'],
            [['ip_adress'], 'string'],
            ['ip_adress', 'match', 'pattern'=>'/^(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])(\.(25[0-5]|2[0-4][0-9]|[0-1][0-9]{2}|[0-9]{2}|[0-9])){3}$/'],
            [['computer_name', 'login', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'computer_id' => 'Computer ID',
            'computer_name' => 'Computer Name',
            'ip_adress' => 'Ip Adress',
            'login' => 'Login',
            'password' => 'Password',
            'app_id' => 'Application ID',
            'app_name' => 'Application Name',
            'vendor_name' => 'Vendor',
            'licence_required' => 'Licence Required',
        ];
    }
    public function getApplications()
    {
        return $this->hasMany(Applications::className(), ['app_id' => 'app_id'])
            ->viaTable('computer_app', ['computer_id' => 'computer_id']);
    }
}
