<?php

namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;


/**
 * This is the model class for table "producto".
 *
 * @property integer $id_producto
 * @property string $nombre
 * @property integer $cod_tipo
 * @property integer $cod_clasifi
 * @property string $dimension_producto
 * @property string $imag_adju
 * @property integer $unidades
 * @property string $costo
 * @property integer $estado_id
 * @property integer $color_id
 * @property integer $cantidad_color
 * @property integer $materiales_id
 *
 * @property DetalleCotizacionProductos[] $detalleCotizacionProductos
 * @property DetalleProductoColor[] $detalleProductoColors
 * @property DetalleProductoMaterial[] $detalleProductoMaterials
 * @property DetalleStand[] $detalleStands
 * @property DetalleStandProducto[] $detalleStandProductos
 * @property Clasificacion $codClasifi
 * @property TipoProducto $codTipo
 * @property Estado $estado
 * @property Materiales $materiales
 * @property Color $color
 */
class Producto extends ActiveRecord
{
    public $imgfile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'cod_clasifi', 'dimension_producto', 'unidades', 'costo', 'estado_id', 'cantidad_color', 'materiales_id'], 'required'],
            [['id_producto', 'cod_clasifi', 'unidades', 'estado_id', 'cantidad_color', 'materiales_id'], 'integer'],            
            [['nombre', 'dimension_producto', 'imag_adju'], 'string', 'max' => 20],
            ['nombre', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Solo se aceptan letras'],
            [['imgfile'], 'file'],            
            [['cod_clasifi'], 'exist', 'skipOnError' => true, 'targetClass' => Clasificacion::className(), 'targetAttribute' => ['cod_clasifi' => 'id_clasifi']],
            
            [['estado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id' => 'id_estado']],
            [['materiales_id'], 'exist', 'skipOnError' => true, 'targetClass' => Materiales::className(), 'targetAttribute' => ['materiales_id' => 'id_mate']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id_color']],
            
            [['costo','unidades','cantidad_color'], 'match','pattern'=>"/^[0-9]+$/i",'message'=> 'Solo se aceptan números, sin espacio entre estos.'],
            [['unidades','cantidad_color'],'integer','max'=>20],
            [['unidades', 'cantidad_color'], 'string', 'max' => 2],
            [['costo'], 'integer', 'min' => 20000, 'max' => 2000000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'Referencia',
            'nombre' => 'Nombre',            
            'cod_clasifi' => 'Categoria',
            'dimension_producto' => 'Dimension Producto',
            'imgfile' => 'Imgfile',
            'imag_adju' => 'Imag Adju',
            'unidades' => 'Unidades',
            'costo' => 'Costo',
            'estado_id' => 'Estado',
            'color_id' => 'Colores',
            'cantidad_color' => 'Cantidad Color',
            'materiales_id' => 'Materiales',
            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleCotizacionProductos()
    {
        return $this->hasMany(DetalleCotizacionProductos::className(), ['producto_id' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleProductoColors()
    {
        return $this->hasMany(DetalleProductoColor::className(), ['producto_id' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleProductoMaterials()
    {
        return $this->hasMany(DetalleProductoMaterial::className(), ['producto_id_producto' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleStands()
    {
        return $this->hasMany(DetalleStand::className(), ['producto_id' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleStandProductos()
    {
        return $this->hasMany(DetalleStandProducto::className(), ['producto_id' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodClasifi()
    {
        return $this->hasOne(Clasificacion::className(), ['id_clasifi' => 'cod_clasifi']);
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
    public function getMateriales()
    {
        return $this->hasOne(Materiales::className(), ['id_mate' => 'materiales_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id_color' => 'color_id']);
    }
}
