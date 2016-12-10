<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Inmuebles;

/**
 * InmueblesSearch represents the model behind the search form about `backend\models\Inmuebles`.
 */
class InmueblesSearch extends Inmuebles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inmueble_id', 'ubicacion_id', 'Activo', 'cantidad_inventario'], 'integer'],
            [['nombre', 'descripcion', 'numero_control', 'marca', 'numero_serie', 'modelo', 'digito', 'fecha_adquisicion', 'fotografia_uno', 'fotografia_dos', 'fotografia_detalle'], 'safe'],
            [['costo'], 'number'],
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
        $query = Inmuebles::find();

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
            'inmueble_id' => $this->inmueble_id,
            'ubicacion_id' => $this->ubicacion_id,
            'Activo' => $this->Activo,
            'cantidad_inventario' => $this->cantidad_inventario,
            'costo' => $this->costo,
            'fecha_adquisicion' => $this->fecha_adquisicion,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'numero_control', $this->numero_control])
            ->andFilterWhere(['like', 'marca', $this->marca])
            ->andFilterWhere(['like', 'numero_serie', $this->numero_serie])
            ->andFilterWhere(['like', 'modelo', $this->modelo])
            ->andFilterWhere(['like', 'digito', $this->digito])
            ->andFilterWhere(['like', 'fotografia_uno', $this->fotografia_uno])
            ->andFilterWhere(['like', 'fotografia_dos', $this->fotografia_dos])
            ->andFilterWhere(['like', 'fotografia_detalle', $this->fotografia_detalle]);

        return $dataProvider;
    }
}
