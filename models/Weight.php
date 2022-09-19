<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weight".
 *
 * @property int|null $id
 * @property float $kebersihan
 * @property float $fasilitas
 * @property float $kenyamanan
 * @property float $suasana
 */
class Weight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kebersihan', 'fasilitas', 'kenyamanan', 'suasana'], 'required'],
            [['kebersihan', 'fasilitas', 'kenyamanan', 'suasana'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kebersihan' => 'Kebersihan',
            'fasilitas' => 'Fasilitas',
            'kenyamanan' => 'Kenyamanan',
            'suasana' => 'Suasana',
        ];
    }
}
