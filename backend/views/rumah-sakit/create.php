<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\RumahSakit $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'RumahSakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud rumah-sakit-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
