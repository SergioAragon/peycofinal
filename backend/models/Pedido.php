<?php

namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\db\Expression;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $id_pedido
 * @property integer $cliente_id
 * @property string $nombre_expo
 * @property string $nombre_empresa
 * @property integer $frente
 * @property integer $fondo
 * @property string $Referencia_stand
 * @property integer $cantidad_stand
 * @property string $direccion
 * @property string $fecha_pedido
 * @property integer $telefono
 * @property integer $municipio_id
 * @property integer $estado_id
 * @property string $updated_at
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }


    public function behaviors()
    {
        return [
            [
                  'class' => TimestampBehavior::className(),
                  'createdAtAttribute' => 'fecha_pedido',
                  'updatedAtAttribute' => 'updated_at',
                  'value' => new Expression('NOW()'),
              ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente_id', 'nombre_expo', 'frente', 'fondo', 'Referencia_stand', 'cantidad_stand', 'direccion', 'telefono'], 'required'],
            [['cliente_id', 'frente', 'fondo', 'cantidad_stand', 'telefono', 'municipio_id', 'estado_id'], 'integer'],
            [['fecha_pedido', 'updated_at'], 'safe'],
            [['nombre_expo', 'nombre_empresa'], 'string', 'max' => 40],
            [['Referencia_stand', 'direccion'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedido' => 'Id Pedido',
            'cliente_id' => 'Cliente ID',
            'nombre_expo' => 'Nombre Expo',
            'nombre_empresa' => 'Nombre Empresa',
            'frente' => 'Frente',
            'fondo' => 'Fondo',
            'Referencia_stand' => 'Referencia Stand',
            'cantidad_stand' => 'Cantidad Stand',
            'direccion' => 'Direccion',
            'fecha_pedido' => 'Fecha Pedido',
            'telefono' => 'Telefono',
            'municipio_id' => 'Municipio ID',
            'estado_id' => 'Estado ID',
            'updated_at' => 'Updated At',
        ];
    }
}
