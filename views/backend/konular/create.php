<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */

$this->title = Yii::t('app', 'Create Konular');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../html']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Konulars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="konular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
