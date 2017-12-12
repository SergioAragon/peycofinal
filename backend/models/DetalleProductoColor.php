<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detalle_producto_color".
 *
 * @property integer $id_dpc
 * @property integer $producto_id
 * @property integer $color_id
 * @property integer $cantidad
 * @property integer $estado_id
 *
 * @property Estado $estado
 * @property Color $color
 * @property Producto $producto
 */
class DetalleProductoColor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_producto_color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['producto_id', 'color_id'], 'required'],
            [['producto_id', 'color_id', 'cantidad', 'estado_id'], 'integer'],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'id_estado']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id_color']],
            [['producto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto_id' => 'id_producto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dpc' => 'Id Dpc',
            'producto_id' => 'Producto ID',
            'color_id' => 'Color ID',
            'cantidad' => 'Cantidad',
            'estado_id' => 'Estado ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['id_estado' => 'estado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id_color' => 'color_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'producto_id']);
    }
}
