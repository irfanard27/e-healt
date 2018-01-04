<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
 * @var yii\web\View $this
 * @var app\models\User $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
            'id' => 'User',
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
            <?php
                $user = \yii\helpers\ArrayHelper::map(\app\models\User::find()->all(),'id','username');
                $dok = \yii\helpers\ArrayHelper::map(\app\models\Dokter::find()->all(),'id', 'nama_dokter');
            ?>
            <?= $form->field($model, 'id_user')->dropDownList($user) ?>
            <?= $form->field($model, 'id_dokter')->dropDownList($dok) ?>
        </div>

        <div class="box-footer">
            <?php echo $form->errorSummary($model); ?>

            <?= Html::submitButton(
                '<span class="fa fa-check"></span> Save',
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

