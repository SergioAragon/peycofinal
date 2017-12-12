<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DetalleOrden;

/**
 * DetalleOrdenSearch represents the model behind the search form about `frontend\models\DetalleOrden`.
 */
class DetalleOrdenSearch extends DetalleOrden
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orden_detalle_id', 'orden_id', 'prod_id', 'prod_unida', 'estado', 'created_at'], 'integer'],
            [['prod_pre'], 'safe'],
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
        $query = DetalleOrden::find();

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
            'orden_detalle_id' => $this->orden_detalle_id,
            'orden_id' => $this->orden_id,
            'prod_id' => $this->prod_id,
            'prod_unida' => $this->prod_unida,
            'estado' => $this->estado,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'prod_pre', $this->prod_pre]);

        return $dataProvider;
    }
}
