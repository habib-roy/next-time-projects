<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Viz;

/**
 * VizSearch represents the model behind the search form of `app\models\Viz`.
 */
class VizSearch extends Viz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'judul', 'deskripsi', 'penjelasan', 'tipe', 'sampul', 'created_at', 'updated_at', 'deleted_at', 'slug'], 'safe'],
            [['suka', 'tidak_suka', 'dilihat', 'dibagikan'], 'integer'],
            [['terbit','favorite'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Viz::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['created_at' => SORT_DESC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'suka' => $this->suka,
            'tidak_suka' => $this->tidak_suka,
            'dilihat' => $this->dilihat,
            'dibagikan' => $this->dibagikan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'terbit' => $this->terbit,
            'favorite' => $this->favorite,
            'slug' => $this->slug,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'judul', $this->judul])
            ->andFilterWhere(['ilike', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['ilike', 'penjelasan', $this->penjelasan])
            ->andFilterWhere(['ilike', 'tipe', $this->tipe])
            ->andFilterWhere(['ilike', 'sampul', $this->sampul]);

        return $dataProvider;
    }
}
