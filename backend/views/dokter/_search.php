<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var app\models\DokterSearch $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="dokter-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id') ?>

		<?= $form->field($model, 'nama_dokter') ?>

		<?= $form->field($model, 'spesialis') ?>

		<?= $form->field($model, 'alamat') ?>

		<?= $form->field($model, 'telepon') ?>

		<?php // echo $form->field($model, 'priv') ?>

		<?php // echo $form->field($model, 'id_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
