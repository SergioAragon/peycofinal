<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detalle_orden".
 *
 * @property integer $orden_detalle_id
 * @property integer $orden_id
 * @property integer $prod_id
 * @property string $prod_pre
 * @property integer $prod_unida
 * @property integer $estado
 * @property integer $created_at
 *
 * @property Orden $orden
 * @property Producto $prod
 */
class DetalleOrden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalle_orden';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orden_id', 'prod_id', 'prod_pre', 'prod_unida', 'estado', 'created_at'], 'required'],
            [['orden_id', 'prod_id', 'prod_unida', 'estado', 'created_at'], 'integer'],
            [['prod_pre'], 'string', 'max' => 20],
            [['orden_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orden::className(), 'targetAttribute' => ['orden_id' => 'order_id']],
            [['prod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['prod_id' => 'id_producto']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orden_detalle_id' => 'Orden Detalle ID',
            'orden_id' => 'Orden ID',
            'prod_id' => 'Prod ID',
            'prod_pre' => 'Prod Pre',
            'prod_unida' => 'Prod Unida',
            'estado' => 'Estado',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrden()
    {
        return $this->hasOne(Orden::className(), ['order_id' => 'orden_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'prod_id']);
    }
}
