<?php

use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
use yii\widgets\DetailView;

/**
* @var yii\web\View $this
* @var app\models\SuratRujukan $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="surat-rujukan-form">

    <?php $form = ActiveForm::begin([
    'id' => 'SuratRujukan',
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
			<?= $form->field($model, 'resume_medis')->widget(\kartik\select2\Select2::className(),[
                        'data'=> \yii\helpers\ArrayHelper::map(\app\models\ResumeMedis::find()->all(),'id','id_resume_medis'),
                        'options'=>[
                            'prompt'=>'PILIH RESUME MEDIS'
                        ]
            ]) ?>
			<?= $form->field($model, 'kode_rujukan')->textInput(['readonly' => true, 'value'=>"RJK-".time()]) ?>
			<?= $form->field($model, 'keadaan')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'rs_asal')->widget(\kartik\select2\Select2::className(),[
                'data'=> \yii\helpers\ArrayHelper::map(\app\models\RumahSakit::find()->all(),'id','nama_faskes'),
                'options'=>[
                    'prompt'=>'PILIH RUMAH SAKIT'
                ]
            ]) ?>
			<?= $form->field($model, 'rs_tujuan')->widget(\kartik\select2\Select2::className(),[
                'data'=> \yii\helpers\ArrayHelper::map(\app\models\RumahSakit::find()->all(),'id','nama_faskes'),
                'options'=>[
                    'prompt'=>'PILIH RUMAH SAKIT'
                ]
            ]) ?>
            <?= $form->field($model, 'nama_dokter')->widget(\kartik\select2\Select2::className(),[
                'data'=> \yii\helpers\ArrayHelper::map(\app\models\Dokter::find()->all(),'id','nama_dokter'),
                'options'=>[
                    'prompt'=>'PILIH DOKTER'
                ]
            ]) ?>
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

