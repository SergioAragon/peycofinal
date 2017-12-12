<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detalle_cotizacion_productos".
 *
 * @property integer $id_dcp
 * @property integer $producto_id
 * @property integer $cotizacion_id
 * @property integer $total_cotizacion
 *
 * @property Cotizacion $cotizacion
 * @property Producto $producto
 */
class DetalleCotizacionProductos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_cotizacion_productos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producto_id', 'cotizacion_id', 'total_cotizacion'], 'required'],
            [['producto_id', 'cotizacion_id', 'total_cotizacion'], 'integer'],
            [['cotizacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cotizacion::className(), 'targetAttribute' => ['cotizacion_id' => 'id_cotizacion']],
            [['producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto_id' => 'id_producto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dcp' => 'Id Dcp',
            'producto_id' => 'Producto ID',
            'cotizacion_id' => 'Cotizacion ID',
            'total_cotizacion' => 'Total Cotizacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCotizacion()
    {
        return $this->hasOne(Cotizacion::className(), ['id_cotizacion' => 'cotizacion_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'producto_id']);
    }
}
