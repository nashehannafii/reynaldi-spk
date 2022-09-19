<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spk".
 *
 * @property int $id
 * @property string $nama_asrama
 * @property int $kebersihan
 * @property int $fasilitas
 * @property int $kenyamanan
 * @property int $suasana
 * @property float $nilai_hasil
 */
class Spk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_asrama', 'kebersihan', 'fasilitas', 'kenyamanan', 'suasana', 'nilai_hasil'], 'required'],
            [['kebersihan', 'fasilitas', 'kenyamanan', 'suasana'], 'integer'],
            [['nilai_hasil'], 'number'],
            [['nama_asrama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_asrama' => 'Nama Asrama',
            'kebersihan' => 'Kebersihan',
            'fasilitas' => 'Fasilitas',
            'kenyamanan' => 'Kenyamanan',
            'suasana' => 'Suasana',
            'nilai_hasil' => 'Nilai Hasil',
        ];
    }
}
