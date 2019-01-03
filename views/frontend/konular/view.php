<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Konular */

$this->title = $model->KonuID;
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
<div align="center">   <h3>Başarılı bir şekilde oluşturdunuz.</h3> </div>
<div align="center">   <a class="btn btn-lg btn-success" href="/html">Konuları Görüntüle.</a> </div>
</body>
</html>
