<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\Dokter $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dokters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud dokter-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
