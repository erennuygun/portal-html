<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */

$this->title = $model->KonuID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../html']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Konulars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<html lang="tr">
<head>
  <style type="text/css">
 body
 {   
  
background-image:url('<?php echo "https://www.desktopbackground.org/download/o/2010/06/08/29747_soft-backgrounds_1920x1080_h.jpg" ?>');
   }
 </style>

</head>

</body>
</html>
<div class="konular-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->KonuID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->KonuID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'KonuID',
            'Konu',
            'İçerik',
            'Oluşturan',
        ],
    ]) ?>

</div>
