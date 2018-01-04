<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Pasien $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Pasien',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-error',
    'options'=>['enctype'=>'multipart/form-data'],
    ]
    );
    ?>

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-header with-border">
                <h3 class="box-title">Form</h3>
        </div>

        <div class="box-body">
			<?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>
            <?php
                $jk_item = ['laki-laki'=>'laki-laki','perempuan'=>'perempuan'];
                $sp_item = ['belum kawin'=>'belum kawin','kawin'=>'kawin'];
            ?>
			<?= $form->field($model, 'jenis_kelamin')->dropDownList($jk_item) ?>
			<?= $form->field($model, 'ttl')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'status_perkawinan')->dropDownList($sp_item) ?>
			<?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'tanggal')->textInput() ?>
        </div>

        <div class="box-footer">
            <?php echo $form->errorSummary($model); ?>

            <?= Html::submitButton(
            '<span class="fa fa-check"></span> ' .
            ($model->isNewRecord ? 'Create' : 'Save'),
            [
            'id' => 'save-' . $model->formName(),
            'class' => 'btn btn-success'
            ]
            );
            ?>
        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>

