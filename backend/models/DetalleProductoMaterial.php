<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detalle_producto_material".
 *
 * @property integer $id_dpm
 * @property integer $materiales_id
 * @property integer $producto_id_producto
 * @property integer $estado_id
 *
 * @property Estado $estado
 * @property Producto $productoIdProducto
 * @property Materiales $materiales
 */
class DetalleProductoMaterial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_producto_material';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['materiales_id', 'producto_id_producto'], 'required'],
            [['materiales_id', 'producto_id_producto', 'estado_id'], 'integer'],
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'id_estado']],
            [['producto_id_producto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['producto_id_producto' => 'id_producto']],
            [['materiales_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materiales::className(), 'targetAttribute' => ['materiales_id' => 'id_mate']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dpm' => 'Id Dpm',
            'materiales_id' => 'Materiales ID',
            'producto_id_producto' => 'Producto Id Producto',
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
    public function getProductoIdProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'producto_id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMateriales()
    {
        return $this->hasOne(Materiales::className(), ['id_mate' => 'materiales_id']);
    }
}
