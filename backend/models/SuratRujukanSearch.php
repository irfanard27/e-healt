<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SuratRujukan;

/**
* SuratRujukanSearch represents the model behind the search form about `app\models\SuratRujukan`.
*/
class SuratRujukanSearch extends SuratRujukan
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'resume_medis', 'rs_asal', 'rs_tujuan', 'nama_dokter'], 'integer'],
            [['kode_rujukan', 'keadaan', 'created_at', 'updated_at'], 'safe'],
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
$query = SuratRujukan::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id' => $this->id,
            'resume_medis' => $this->resume_medis,
            'rs_asal' => $this->rs_asal,
            'rs_tujuan' => $this->rs_tujuan,
            'nama_dokter' => $this->nama_dokter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'kode_rujukan', $this->kode_rujukan])
            ->andFilterWhere(['like', 'keadaan', $this->keadaan]);

return $dataProvider;
}
}