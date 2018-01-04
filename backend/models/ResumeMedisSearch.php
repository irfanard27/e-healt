<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResumeMedis;

/**
* ResumeMedisSearch represents the model behind the search form about `app\models\ResumeMedis`.
*/
class ResumeMedisSearch extends ResumeMedis
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id', 'pasien', 'operasi', 'nama_dokter'], 'integer'],
            [['id_resume_medis', 'diagnosa_awal', 'diagnosa_akhir', 'riwayat_penyakit', 'pemeriksaan_fisik', 'hasil_lab', 'perkembangan', 'keismpulan', 'tgl_masuk', 'tgl_keluar', 'created_at', 'updated_at'], 'safe'],
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
$query = ResumeMedis::find();

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
            'pasien' => $this->pasien,
            'operasi' => $this->operasi,
            'nama_dokter' => $this->nama_dokter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'id_resume_medis', $this->id_resume_medis])
            ->andFilterWhere(['like', 'diagnosa_awal', $this->diagnosa_awal])
            ->andFilterWhere(['like', 'diagnosa_akhir', $this->diagnosa_akhir])
            ->andFilterWhere(['like', 'riwayat_penyakit', $this->riwayat_penyakit])
            ->andFilterWhere(['like', 'pemeriksaan_fisik', $this->pemeriksaan_fisik])
            ->andFilterWhere(['like', 'hasil_lab', $this->hasil_lab])
            ->andFilterWhere(['like', 'perkembangan', $this->perkembangan])
            ->andFilterWhere(['like', 'keismpulan', $this->keismpulan])
            ->andFilterWhere(['like', 'tgl_masuk', $this->tgl_masuk])
            ->andFilterWhere(['like', 'tgl_keluar', $this->tgl_keluar]);

return $dataProvider;
}
}