<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\SuratRujukan $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SuratRujukans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud surat-rujukan-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
