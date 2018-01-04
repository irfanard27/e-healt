<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\models\Dokter $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="dokter-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Dokter',
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
			<?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'spesialis')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'priv')->textInput(['maxlength' => true]) ?>
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
