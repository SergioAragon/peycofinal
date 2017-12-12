<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "color".
 *
 * @property integer $id_color
 * @property string $nombre
 * @property string $num_color
 *
 * @property DetalleProductoColor[] $detalleProductoColors
 * @property Producto[] $productos
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'color';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['id_color'], 'integer'],
            [['nombre', 'num_color'], 'string', 'max' => 20],
            ['nombre', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Solo acepta letras'],
            ['num_color', 'match', 'pattern' => "/^[0-9a-z]+$/i", 'message' => 'Solo acepta números y letras, sin espacio entre estos.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_color' => 'Id Color',
            'nombre' => 'Nombre',
            'num_color' => 'Num Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleProductoColors()
    {
        return $this->hasMany(DetalleProductoColor::className(), ['color_id' => 'id_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::className(), ['color_id' => 'id_color']);
    }
}
