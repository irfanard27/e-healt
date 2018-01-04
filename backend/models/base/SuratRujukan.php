<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the base-model class for table "surat_rujukan".
 *
 * @property integer $id
 * @property integer $resume_medis
 * @property string $kode_rujukan
 * @property string $keadaan
 * @property integer $rs_asal
 * @property integer $rs_tujuan
 * @property integer $nama_dokter
 * @property string $created_at
 * @property string $updated_at
 * @property string $aliasModel
 */
abstract class SuratRujukan extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surat_rujukan';
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
            [['resume_medis', 'kode_rujukan', 'keadaan', 'rs_asal', 'rs_tujuan', 'nama_dokter'], 'required'],
            [['resume_medis', 'rs_asal', 'rs_tujuan', 'nama_dokter'], 'integer'],
            [['kode_rujukan', 'keadaan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resume_medis' => 'Resume Medis',
            'kode_rujukan' => 'Kode Rujukan',
            'keadaan' => 'Keadaan',
            'rs_asal' => 'Rs Asal',
            'rs_tujuan' => 'Rs Tujuan',
            'nama_dokter' => 'Nama Dokter',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }




}