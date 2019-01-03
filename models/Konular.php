<?php

namespace kouosl\html\models;

use Yii;

/**
 * This is the model class for table "{{%Konular}}".
 *
 * @property int $KonuID
 * @property string $Konu
 * @property string $İçerik
 * @property string $Oluşturan
 */
class Konular extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%Konular}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KonuID'], 'required'],
            [['KonuID'], 'integer'],
            [['Konu', 'İçerik', 'Oluşturan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KonuID' => Yii::t('app', 'Konu ID'),
            'Konu' => Yii::t('app', 'Konu'),
            'İçerik' => Yii::t('app', 'İçerik'),
            'Oluşturan' => Yii::t('app', 'Oluşturan'),
        ];
    }
}
