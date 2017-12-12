<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Orden;

/**
 * OrdenSearch represents the model behind the search form about `frontend\models\Orden`.
 */
class OrdenSearch extends Orden
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'user_id', 'total'], 'integer'],
            [['nombre', 'email', 'celular', 'address', 'user_envio', 'email_envio', 'celular_envio', 'address_envio', 'solicitud'], 'safe'],
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
        $query = Orden::find();

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
            'order_id' => $this->order_id,
            'user_id' => $this->user_id,
            'total' => $this->total,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'user_envio', $this->user_envio])
            ->andFilterWhere(['like', 'email_envio', $this->email_envio])
            ->andFilterWhere(['like', 'celular_envio', $this->celular_envio])
            ->andFilterWhere(['like', 'address_envio', $this->address_envio])
            ->andFilterWhere(['like', 'solicitud', $this->solicitud]);

        return $dataProvider;
    }
}
