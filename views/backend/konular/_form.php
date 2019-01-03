<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */
/* @var $form yii\widgets\ActiveForm */
?>

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
