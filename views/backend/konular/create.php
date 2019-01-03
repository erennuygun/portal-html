<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */

$this->title = Yii::t('app', 'Create Konular');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../html']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Konular'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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



<div class="konular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
