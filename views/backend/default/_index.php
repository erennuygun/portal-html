<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
$this->title = 'Admin Paneli';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
//Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
//echo $this->render('index');
//Portlet::end();
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



<div class="site-index">
	 
	
<div align="center"><h1>Admin Paneli</h1> </div>
		
		<div align="center">   <a class="btn btn-lg btn-success" href="/admin/html/konular">Konu Ayarları</a> </div>
     
		
</div>

	
