<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the base-model class for table "resume_medis".
 *
 * @property integer $id
 * @property string $id_resume_medis
 * @property integer $pasien
 * @property string $diagnosa_awal
 * @property string $diagnosa_akhir
 * @property integer $operasi
 * @property string $riwayat_penyakit
 * @property string $pemeriksaan_fisik
 * @property string $hasil_lab
 * @property string $perkembangan
 * @property string $keismpulan
 * @property string $tgl_masuk
 * @property string $tgl_keluar
 * @property integer $nama_dokter
 * @property string $created_at
 * @property string $updated_at
 * @property string $aliasModel
 */
abstract class ResumeMedis extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resume_medis';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_resume_medis', 'pasien', 'diagnosa_awal', 'diagnosa_akhir', 'operasi', 'riwayat_penyakit', 'pemeriksaan_fisik', 'hasil_lab', 'perkembangan', 'keismpulan', 'tgl_masuk', 'tgl_keluar', 'nama_dokter'], 'required'],
            [['pasien', 'operasi', 'nama_dokter'], 'integer'],
            [['riwayat_penyakit', 'keismpulan'], 'string'],
            [['id_resume_medis', 'tgl_masuk'], 'string', 'max' => 100],
            [['diagnosa_awal', 'diagnosa_akhir', 'pemeriksaan_fisik', 'hasil_lab', 'perkembangan', 'tgl_keluar'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_resume_medis' => 'Id Resume Medis',
            'pasien' => 'Pasien',
            'diagnosa_awal' => 'Diagnosa Awal',
            'diagnosa_akhir' => 'Diagnosa Akhir',
            'operasi' => 'Operasi',
            'riwayat_penyakit' => 'Riwayat Penyakit',
            'pemeriksaan_fisik' => 'Pemeriksaan Fisik',
            'hasil_lab' => 'Hasil Lab',
            'perkembangan' => 'Perkembangan',
            'keismpulan' => 'Keismpulan',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_keluar' => 'Tgl Keluar',
            'nama_dokter' => 'Nama Dokter',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }




}