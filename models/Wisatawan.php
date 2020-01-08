<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wisatawan".
 *
 * @property int $Id_wisatawan
 * @property string $Nama
 * @property string $Nama_instansi
 * @property string $Alamat
 * @property string $Email
 * @property int $No_telp
 */
class Wisatawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wisatawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_wisatawan', 'Nama', 'Nama_instansi', 'Alamat', 'Email', 'No_telp'], 'required'],
            [['Id_wisatawan', 'No_telp'], 'integer'],
            [['Nama', 'Email'], 'string', 'max' => 30],
            [['Nama_instansi'], 'string', 'max' => 100],
            [['Alamat'], 'string', 'max' => 60],
            [['Id_wisatawan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_wisatawan' => 'Id Wisatawan',
            'Nama' => 'Nama',
            'Nama_instansi' => 'Nama Instansi',
            'Alamat' => 'Alamat',
            'Email' => 'Email',
            'No_telp' => 'No Telp',
        ];
    }
}
