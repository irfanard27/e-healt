<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\SuratRujukanSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="surat-rujukan-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'resume_medis') ?>

		<?= $form->field($model, 'kode_rujukan') ?>

		<?= $form->field($model, 'keadaan') ?>

		<?= $form->field($model, 'rs_asal') ?>

		<?php // echo $form->field($model, 'rs_tujuan') ?>

		<?php // echo $form->field($model, 'nama_dokter') ?>

		<?php // echo $form->field($model, 'created_at') ?>

		<?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
