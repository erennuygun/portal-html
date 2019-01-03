<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HaberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = Yii::t('app', 'Konular');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../html']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="haber-index">
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
    <h1><?= Html::encode($this->title) ?></h1>
   

    <p>
        <?= Html::a(Yii::t('app', 'Create Konu'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
		
		 'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'KonuID',
            'Konu',
            'İçerik',
            'Oluşturan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>