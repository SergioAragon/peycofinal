<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property integer $id_agenda
 * @property string $descripcion
 * @property integer $empleado_id
 * @property integer $fase_id
 * @property integer $pedido_id
 * @property string $fecha_inicio
 * @property string $fecha_fin
 *
 * @property Empleado $empleado
 * @property Fase $fase
 * @property Pedido $pedido
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'empleado_id', 'fase_id', 'pedido_id', 'fecha_inicio', 'fecha_fin'], 'required'],
            [['empleado_id', 'fase_id', 'pedido_id'], 'integer'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['descripcion'], 'string', 'max' => 20],
            [['empleado_id'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['empleado_id' => 'id_empleado']],
            [['fase_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['fase_id' => 'id_fase']],
            [['pedido_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pedido::className(), 'targetAttribute' => ['pedido_id' => 'id_pedido']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agenda' => 'Id Agenda',
            'descripcion' => 'Descripcion',
            'empleado_id' => 'Empleado ID',
            'fase_id' => 'Fase ID',
            'pedido_id' => 'Pedido ID',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::className(), ['id_empleado' => 'empleado_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFase()
    {
        return $this->hasOne(Fase::className(), ['id_fase' => 'fase_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedido()
    {
        return $this->hasOne(Pedido::className()->where("estado_id==1"), ['id_pedido' => 'pedido_id']);
    }
}
