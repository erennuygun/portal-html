<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */

$this->title = Yii::t('app', 'Update Konular: {name}', [
    'name' => $model->KonuID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../html']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Konulars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KonuID, 'url' => ['view', 'id' => $model->KonuID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="konular-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
