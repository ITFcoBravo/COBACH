<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reportes;

/**
 * ReportesSearch represents the model behind the search form about `backend\models\Reportes`.
 */
class ReportesSearch extends Reportes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reporte_id', 'personal_id', 'inmueble_id', 'Activo'], 'integer'],
            [['nombre_reporte', 'descripcion', 'fecha'], 'safe'],
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
        $query = Reportes::find();

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
            'reporte_id' => $this->reporte_id,
            'personal_id' => $this->personal_id,
            'inmueble_id' => $this->inmueble_id,
            'fecha' => $this->fecha,
            'Activo' => $this->Activo,
        ]);

        $query->andFilterWhere(['like', 'nombre_reporte', $this->nombre_reporte])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
