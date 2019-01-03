<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KonularSearch */
/* @var $form yii\widgets\ActiveForm */
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

<div class="konular-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'KonuID') ?>

    <?= $form->field($model, 'Konu') ?>

    <?= $form->field($model, 'İçerik') ?>

    <?= $form->field($model, 'Oluşturan') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
