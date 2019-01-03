<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\grid\GridView;
$this->title = 'Konu Modülü';
//$data['title'] = Html::encode($this->title);
//$this->params['breadcrumbs'][] = $this->title;
//Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
//echo $this->render('index');
//Portlet::end();
//include 'haberturleri.php';
?>


<h2>Konular</h2>

 <?= GridView::widget([
        'dataProvider' => $dataProvider,

		'options' => [
                'style'=>'overflow: auto; word-wrap: break-word;'
        ],

   	    'summary'=>'',
	    'showFooter'=>false,
		'showHeader' => false,

		'columns' => [

            'KonuID',
            'Konu',
            'İçerik',
            'Oluşturan',

			['class' => 'yii\grid\ActionColumn',
			 'template' => '{view}',

			 'buttons' => [
                    'view' => function ($url, $model) {

                        return  Html::a('Konuyu Görüntüle', $url,
						[ 'title' => Yii::t('app', 'View'), 'class'=>'btn btn-info', ]) ;
                    },
             ],
             'urlCreator' => function ($action, $model, $key, $index) {
                  if ($action === 'view') {
                      $url = \yii\helpers\Url::toRoute(['konuoku', 'id' => $key]);
                      return $url;
                  }
              }
			]

        ]

]);



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

<body>

 <p>
   <div align="center">   <a class="btn btn-lg btn-success" href="/html/konular/create">Yeni Konu Oluştur</a> </div>

 </p>

</body>
</html>
