<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clasificacion".
 *
 * @property integer $id_clasifi
 * @property string $nombre
 */
class Clasificacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clasificacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['id_clasifi', 'nombre'], 'required'],
            [['descripcion'], 'required'],
            // [['id_clasifi'], 'integer'],
            [['descripcion'], 'string', 'min' => 3, 'max' => 20],
            ['descripcion', 'match','pattern'=>"/^[a-z]+$/i",'message'=> 'Solo acepta letras'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_clasifi' => 'Id Clasifi',
            'descripcion' => 'Nombre',
        ];
    }
}
