<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_paket".
 *
 * @property int $kd_paket
 * @property int $Id_paket
 * @property string $jenis_paket
 * @property int $Total_harga
 */
class JenisPaket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_paket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_paket', 'Id_paket', 'jenis_paket', 'Total_harga'], 'required'],
            [['kd_paket', 'Id_paket', 'Total_harga'], 'integer'],
            [['jenis_paket'], 'string', 'max' => 32],
            [['kd_paket'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_paket' => 'Kd Paket',
            'Id_paket' => 'Id Paket',
            'jenis_paket' => 'Jenis Paket',
            'Total_harga' => 'Total Harga',
        ];
    }
}
