<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\ResumeMedisSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="resume-medis-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'id_resume_medis') ?>

		<?= $form->field($model, 'pasien') ?>

		<?= $form->field($model, 'diagnosa_awal') ?>

		<?= $form->field($model, 'diagnosa_akhir') ?>

		<?php // echo $form->field($model, 'operasi') ?>

		<?php // echo $form->field($model, 'riwayat_penyakit') ?>

		<?php // echo $form->field($model, 'pemeriksaan_fisik') ?>

		<?php // echo $form->field($model, 'hasil_lab') ?>

		<?php // echo $form->field($model, 'perkembangan') ?>

		<?php // echo $form->field($model, 'keismpulan') ?>

		<?php // echo $form->field($model, 'tgl_masuk') ?>

		<?php // echo $form->field($model, 'tgl_keluar') ?>

		<?php // echo $form->field($model, 'nama_dokter') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
