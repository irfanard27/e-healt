<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SuratRujukan $model
*/

$this->title = Yii::t('app', 'SuratRujukan') . $model->id . ', ' . 'Edit';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SuratRujukans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="giiant-crud surat-rujukan-update">

    <div class="crud-navigation">
        <?= Html::a('<span class="fa fa-eye-open"></span> ' . 'View', ['view', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
    </div>

    <br clear="all" />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
