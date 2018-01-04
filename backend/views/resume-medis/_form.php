<?php

use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
use yii\widgets\DetailView;

/**
* @var yii\web\View $this
* @var app\models\ResumeMedis $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="resume-medis-form">

    <?php $form = ActiveForm::begin([
    'id' => 'ResumeMedis',
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
			<?= $form->field($model, 'id_resume_medis')->textInput(['readonly'=>true, 'value'=>'RMD-'.time()]) ?>
			<?= $form->field($model, 'pasien')->widget(\kartik\select2\Select2::className(),[
			        'data'=>\yii\helpers\ArrayHelper::map(\app\models\Pasien::find()->all(),'id','nama_pasien'),
                    'options'=>[
                            'prompt'=>'Pilih Pasien'
                    ]
            ]) ?>
			<?= $form->field($model, 'diagnosa_awal')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'diagnosa_akhir')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'operasi')->textInput() ?>
			<?= $form->field($model, 'riwayat_penyakit')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'pemeriksaan_fisik')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'hasil_lab')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'perkembangan')->textInput(['maxlength' => true]) ?>
			<?= $form->field($model, 'keismpulan')->textarea(['rows' => 6]) ?>
			<?= $form->field($model, 'tgl_masuk')->widget(\kartik\date\DatePicker::className(),[
			        'pluginOptions'=>[
			                'format'=>'dd-mm-yyyy'
                    ]
            ]) ?>
			<?= $form->field($model, 'tgl_keluar')->widget(\kartik\date\DatePicker::className(),[
                'pluginOptions'=>[
                    'format'=>'dd-mm-yyyy'
                ]
            ])?>
			<?= $form->field($model, 'nama_dokter')->widget(\kartik\select2\Select2::className(),[
                'data'=>\yii\helpers\ArrayHelper::map(\app\models\Dokter::find()->all(),'id','nama_dokter'),
                'options'=>[
                    'prompt'=>'Pilih Dokter'
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

