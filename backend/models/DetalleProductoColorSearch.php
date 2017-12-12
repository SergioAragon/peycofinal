<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DetalleProductoColor;

/**
 * DetalleProductoColorSearch represents the model behind the search form about `backend\models\DetalleProductoColor`.
 */
class DetalleProductoColorSearch extends DetalleProductoColor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dpc', 'producto_id', 'color_id', 'cantidad', 'estado_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetalleProductoColor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_dpc' => $this->id_dpc,
            'producto_id' => $this->producto_id,
            'color_id' => $this->color_id,
            'cantidad' => $this->cantidad,
            'estado_id' => $this->estado_id,
        ]);

        return $dataProvider;
    }
}
