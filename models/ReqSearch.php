<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Req;

/**
 * ReqSearch represents the model behind the search form of `app\models\Req`.
 */
class ReqSearch extends Req
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'judul', 'deskripsi', 'atas_nama', 'surel', 'created_at'], 'safe'],
            [['didukung', 'dibagikan'], 'integer'],
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
        $query = Req::find();

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
            'didukung' => $this->didukung,
            'dibagikan' => $this->dibagikan,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['ilike', 'id', $this->id])
            ->andFilterWhere(['ilike', 'judul', $this->judul])
            ->andFilterWhere(['ilike', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['ilike', 'atas_nama', $this->atas_nama])
            ->andFilterWhere(['ilike', 'surel', $this->surel]);

        return $dataProvider;
    }
}
