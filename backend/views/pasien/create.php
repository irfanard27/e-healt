<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Pasien $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pasiens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud pasien-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
