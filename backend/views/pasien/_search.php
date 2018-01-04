<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\PasienSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nama_pasien') ?>

		<?= $form->field($model, 'jenis_kelamin') ?>

		<?= $form->field($model, 'ttl') ?>

		<?= $form->field($model, 'status_perkawinan') ?>

		<?php // echo $form->field($model, 'alamat_pasien') ?>

		<?php // echo $form->field($model, 'telepon') ?>

		<?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
