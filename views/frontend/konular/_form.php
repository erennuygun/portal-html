<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */
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


<div class="konular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'KonuID')->textInput() ?>

    <?= $form->field($model, 'Konu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'İçerik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Oluşturan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">

        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
