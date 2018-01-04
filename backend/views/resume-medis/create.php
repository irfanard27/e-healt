<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\models\ResumeMedis $model
*/

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'ResumeMedis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud resume-medis-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
