<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paket_oubond".
 *
 * @property int $Id_paket
 * @property string $Kd_paket
 * @property string $Jenis_paket
 * @property int $Harga
 * @property string $Fasilitas
 * @property string $Kegiatan
 */
class PaketOutbond extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paket_oubond';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_paket', 'Jenis_paket', 'Harga', 'Fasilitas', 'Kegiatan'], 'required'],
            [['Harga'], 'integer'],
            [['Kd_paket', 'Jenis_paket'], 'string', 'max' => 20],
            [['Fasilitas', 'Kegiatan'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_paket' => 'Id Paket',
            'Kd_paket' => 'Kd Paket',
            'Jenis_paket' => 'Jenis Paket',
            'Harga' => 'Harga',
            'Fasilitas' => 'Fasilitas',
            'Kegiatan' => 'Kegiatan',
        ];
    }
}
