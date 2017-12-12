<?php

namespace backend\models;

use Yii;
use common\models\User;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\db\Expression;
use yii\base\Model;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property integer $cedula
 * @property integer $telefono
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $authKey
 * @property string $access_token
 * @property integer $activate
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 * @property integer $role
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        //return 'clientes';
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombres', 'apellidos', 'telefono', 'username', 'email'], 'required'],
            [['telefono', 'activate', 'role'], 'integer'],
            // [['created_at', 'updated_at'], 'safe'],
            [['nombres', 'apellidos', 'username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 60],
            // [['authKey'], 'string', 'max' => 32],
            // [['authKey', 'targetClass' => 'generateAuthKey']],
            // [['password_reset_token'], 'string', 'max' => 250],
        ];
    }
    // $user->generateAuthKey();

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            //'cedula' => 'Cedula',
            'telefono' => 'Teléfono',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            // 'authKey' => 'Auth Key',
            // 'password_reset_token' => 'Token',
            // 'activate' => 'Activate',
            //'status' => 'Status',
            // 'created_at' => 'Created At',
            // 'updated_at' => 'Updated At',
            'role' => 'Role',
        ];
    }

    

}
