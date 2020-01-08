<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $Id_pemesanan
 * @property string $Kode_pemesanan
 * @property string|null $Kd_paket
 * @property string|null $Tgl_pemesanan
 * @property int|null $Jml_peserta
 * @property int $Total_harga
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_pemesanan', 'Kode_pemesanan', 'Total_harga'], 'required'],
            [['Id_pemesanan', 'Jml_peserta', 'Total_harga'], 'integer'],
            [['Tgl_pemesanan'], 'safe'],
            [['Kode_pemesanan'], 'string', 'max' => 11],
            [['Kd_paket'], 'string', 'max' => 20],
            [['Kode_pemesanan'], 'unique'],
            [['Kd_paket'], 'unique'],
            [['Id_pemesanan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_pemesanan' => 'Id Pemesanan',
            'Kode_pemesanan' => 'Kode Pemesanan',
            'Kd_paket' => 'Kd Paket',
            'Tgl_pemesanan' => 'Tgl Pemesanan',
            'Jml_peserta' => 'Jml Peserta',
            'Total_harga' => 'Total Harga',
        ];
    }
}
