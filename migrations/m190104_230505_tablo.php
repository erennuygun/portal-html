<?php

use yii\db\Migration;

/**
 * Class m190104_230505_tablo
 */
class m190104_230505_tablo extends Migration
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
        'Konu'=>'Teknoloji',
        'İçerik' => '	Teknoloji mal veya hizmetlerin üretiminde veya buna yönelik amaçların gerçekleştirilmesinde kullanılan beceriler, yöntemler, işlemler, tekniklerin derlenmesi veya bilimsel araştırmalardır.',
        'Oluşturan' => 'Mehmet Akif Altınok'
          ]);
      $this->insert('konu',[
        'Konu'=>'Haber',
        'İçerik' => '	Haber, güncel ve ilginç bir olayın olduğunca nesnel ve gerçeğe uygun bir biçimde sunulmasıdır. Haber metninde her türlü taraflı değerlendirmelerden ve söz oyunlarından uzak durulur. Metin kısa, haber dili de yalındır. ',
        'Oluşturan' => 'Muhammed Eren Uygun'
          ]);
      $this->insert('konu',[
        'Konu'=>'Bilgisayar',
        'İçerik' => '	Bilgisayar, kendisine işlediğimiz bilgileri istediğimizde saklayabilen, istediğimizde geri verebilen cihaza denir. İlk elektrikli bilgisayar ENIACtır. Bilgisayarlar, tarih boyunca, çok farklı biçimlerde karşımıza çıkmışlardır.',
        'Oluşturan' => 'Selin Çaylı'
          ]);
      $this->insert('konu',[
      'Konu'=>'Düzenli Kitap Okuma',
      'İçerik' => '	Düzenli kitap okuyan birinin sıkılması söz konusu olamaz. Evde, otobüste, metroda canınızın sıkıldığını hissettiğiniz bir anda, bir kitabın kapağını açmak sıkıntınızı gidermeye yetecektir.',
      'Oluşturan' => 'Halenur Seyit'
      ]);



  }

      public function down()
      {
        $TABLE_NAME = 'konu';
        $this->dropTable($TABLE_NAME);
      }


}
