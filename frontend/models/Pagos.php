<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pagos".
 *
 * @property integer $pag_id
 * @property string $pag_nom
 * @property integer $status
 */
class Pagos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pag_nom', 'status'], 'required'],
            [['status'], 'integer'],
            [['pag_nom'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pag_id' => 'Pag ID',
            'pag_nom' => 'Pag Nom',
            'status' => 'Status',
        ];
    }

    function getAllPagos()
    {
        $data = Pagos::find()->asArray()->all();
        return $data;
    }
}
