<?php

use yii\db\Migration;

/**
 * Class m190104_222407_konular
 */
class m190104_222407_konular extends Migration
{


    public function up()
    {
      $tableOptions = null;
     if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }
	  $TABLE_NAME = 'konu';
      $this->createTable($TABLE_NAME, [
          'KonuID' => $this->primaryKey(),
          'Konu' => $this->string(128)->notNull(),
          'İçerik' => $this->string(10000)->notNull(),
          'Oluşturan' => $this->string(10000)->notNull(),

      ], $tableOptions);
    $this->insert('konu',[
      'konu'=>'Teknoloji',
      'icerik' => '	Teknoloji mal veya hizmetlerin üretiminde veya buna yönelik amaçların gerçekleştirilmesinde kullanılan beceriler, yöntemler, işlemler, tekniklerin derlenmesi veya bilimsel araştırmalardır.',
      'olusturan' => 'Mehmet Akif Altınok'
    $this->insert('konu',[
      'konu'=>'Haber',
      'icerik' => '	Haber, güncel ve ilginç bir olayın olduğunca nesnel ve gerçeğe uygun bir biçimde sunulmasıdır. Haber metninde her türlü taraflı değerlendirmelerden ve söz oyunlarından uzak durulur. Metin kısa, haber dili de yalındır. ',
      'olusturan' => 'Muhammed Eren Uygun'
    $this->insert('konu',[
      'konu'=>'Bilgisayar',
      'icerik' => '	Bilgisayar, kendisine işlediğimiz bilgileri istediğimizde saklayabilen, istediğimizde geri verebilen cihaza denir. İlk elektrikli bilgisayar ENIACtır. Bilgisayarlar, tarih boyunca, çok farklı biçimlerde karşımıza çıkmışlardır.',
      'olusturan' => 'Selin Çaylı'
    $this->insert('konu',[
    'konu'=>'Düzenli Kitap Okuma',
    'icerik' => '	Düzenli kitap okuyan birinin sıkılması söz konusu olamaz. Evde, otobüste, metroda canınızın sıkıldığını hissettiğiniz bir anda, bir kitabın kapağını açmak sıkıntınızı gidermeye yetecektir.',
    'olusturan' => 'Halenur Seyit'

]);



    }

    public function down()
    {
      $TABLE_NAME = 'konu';
      $this->dropTable($TABLE_NAME);
    }
}
