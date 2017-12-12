<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property integer $id_empleado
 * @property string $nombre
 * @property string $cargo
 * @property integer $estado_id
 *
 * @property Agenda[] $agendas
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'cargo'], 'required'],
            [['estado_id'], 'integer'],
            [['nombre', 'cargo'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_empleado' => 'Id Empleado',
            'nombre' => 'Nombre',
            'cargo' => 'Cargo',
            'estado_id' => 'Estado ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['empleado_id' => 'id_empleado']);
    }
}
