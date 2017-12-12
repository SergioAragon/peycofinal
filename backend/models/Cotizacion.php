<?php

namespace backend\models;

use Yii;
 use yii\db\Expression;
 use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
//use yii\web\IdentityInterface;

/**
 * This is the model class for table "cotizacion".
 *
 * @property integer $id_cotizacion
 * @property integer $cliente_id
 * @property integer $producto_id
 * @property string $fecha
 *
 * @property Clientes $cliente
 * @property Producto $producto
 * @property DetalleCotizacionProductos[] $detalleCotizacionProductos
 */
class Cotizacion extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cotizacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id_cotizacion', 'cliente_id', 'producto_id', 'fecha'], 'required'],
            [['cliente_id', 'fecha'], 'required'],
            [['cliente_id', 'producto_id'], 'integer'],
            [['fecha'], 'safe'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_id' => 'id']],
            [['producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto_id' => 'id_producto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cotizacion' => 'Id Cotizacion',
            'cliente_id' => 'Cliente ID',
            'producto_id' => 'Producto ID',
            'fecha' => 'Fecha',
        ];
    }


    public function behaviors()
    {
        return [
            [
                  'class' => TimestampBehavior::className(),
                  'createdAtAttribute' => 'fecha',
                  //'updatedAtAttribute' => 'updated_at',
                  'value' => new Expression('NOW()'),
              ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'producto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
         */
    public function getDetalleCotizacionProductos()
    {
        return $this->hasMany(DetalleCotizacionProductos::className(), ['cotizacion_id' => 'id_cotizacion']);
    }
}
