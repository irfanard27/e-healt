<?php

use dmstr\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var app\models\SuratRujukan $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('app', 'SuratRujukan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SuratRujukans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<div class="giiant-crud surat-rujukan-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>
    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
                '<span class="fa fa-pencil"></span> ' . 'Edit',
                ['update', 'id' => $model->id],
                ['class' => 'btn btn-info']) ?>

            <?= Html::a(
                '<span class="fa fa-plus"></span> ' . 'New',
                ['create'],
                ['class' => 'btn btn-success']) ?>

            <?= Html::a(
                '<span class="fa fa-paperclip"></span> ' . 'Cetak',
                ['create'],
                ['class' => 'btn btn-default']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="fa fa-list"></span> '
                . 'Full list', ['index'], ['class' => 'btn btn-default']) ?>
        </div>

    </div>
    <br clear="all">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Detail </h3>
        </div>

        <div class="box-body">
            <?php $this->beginBlock('app\models\SuratRujukan'); ?>


            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'kode_rujukan',
                    'keadaan',
                    [
                        'label' => 'Rumah Sakit Asal',
                        'value' => \app\models\RumahSakit::findOne($model->rs_asal)->nama_faskes
                    ],
                    [
                        'label' => 'Rumah Sakit Tujuan',
                        'value' => \app\models\RumahSakit::findOne($model->rs_tujuan)->nama_faskes
                    ],
                    [
                        'label' => 'Nama Dokter',
                        'value' => \app\models\Dokter::findOne($model->nama_dokter)->nama_dokter
                    ]

                ],
            ]); ?>


            <hr/>

            <?= Html::a('<span class="fa fa-trash"></span> ' . 'Delete', ['delete', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'data-confirm' => '' . 'Are you sure to delete this item?' . '',
                    'data-method' => 'post',
                ]); ?>
            <?php $this->endBlock(); ?>


            <?php $this->beginBlock('resume-medis'); ?>

            <?php $model_2 = \app\models\ResumeMedis::findOne($model->resume_medis) ?>
            <?= DetailView::widget([
                'model' => $model_2,
                'attributes' => [
                    'id',
                    'id_resume_medis',
                    [
                        'label' => 'Nama Pasien',
                        'value' => \app\models\Pasien::findOne($model_2->pasien)->nama_pasien
                    ],
                    'diagnosa_awal',
                    'diagnosa_akhir',
                    'operasi',
                    'riwayat_penyakit:ntext',
                    'pemeriksaan_fisik',
                    'hasil_lab',
                    'perkembangan',
                    'keismpulan:ntext',
                    'tgl_masuk',
                    'tgl_keluar',
                    [
                        'label' => 'Nama Dokter',
                        'value' => \app\models\Dokter::findOne($model_2->nama_dokter)->nama_dokter
                    ],


                ],
            ]); ?>

            <hr/>

            <?php $this->endBlock(); ?>


            <?= Tabs::widget(
                [
                    'id' => 'relation-tabs',
                    'encodeLabels' => false,
                    'items' => [
                        [
                            'label' => '<b class=""># ' . $model->id . '</b>',
                            'content' => $this->blocks['app\models\SuratRujukan'],
                            'active' => true,

                        ],    [
                            'label' => 'RESUME MEDIS',
                            'content' => $this->blocks['resume-medis'],
                        ],
                    ]
                ]
            );
            ?>
        </div>
    </div>
</div>
