<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "orden".
 *
 * @property integer $order_id
 * @property integer $user_id
 * @property string $nombre
 * @property string $email
 * @property string $celular
 * @property string $address
 * @property string $user_envio
 * @property string $email_envio
 * @property string $celular_envio
 * @property string $address_envio
 * @property string $solicitud
 * @property integer $total
 */
class Orden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orden';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'nombre', 'email', 'pago_id', 'celular', 'address', 'user_envio', 'email_envio', 'celular_envio', 'address_envio', 'solicitud', 'total'], 'required', 'message'=>'{attribute} No deben estar vacios'],
            [['user_id', 'total','pago_id'], 'integer'],
            [['solicitud'], 'string'],
            [['nombre', 'email', 'celular', 'address', 'user_envio', 'email_envio', 'celular_envio', 'address_envio'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'nombre' => 'Cliente',
            'email' => 'Email',
            'celular' => 'Telefono',
            'address' => 'Direccion',
            'user_envio' => 'Nombre',
            'email_envio' => 'Email',
            'celular_envio' => 'Telefono',
            'address_envio' => 'Direccion',
            'solicitud' => 'Solicitud',
            'total' => 'Total',
            'pago_id' => 'pago',
        ];
    }
}
