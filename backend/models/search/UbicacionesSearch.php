<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ubicaciones;

/**
 * UbicacionesSearch represents the model behind the search form about `backend\models\Ubicaciones`.
 */
class UbicacionesSearch extends Ubicaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ubicacion_id', 'Activo'], 'integer'],
            [['nombre_ubicacion', 'plantel'], 'safe'],
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
        $query = Ubicaciones::find();

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
            'ubicacion_id' => $this->ubicacion_id,
            'Activo' => $this->Activo,
        ]);

        $query->andFilterWhere(['like', 'nombre_ubicacion', $this->nombre_ubicacion])
            ->andFilterWhere(['like', 'plantel', $this->plantel]);

        return $dataProvider;
    }
}
