<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $ID
 * @property string $Nama
 * @property string $NIS
 * @property string $ID_Kelas
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Nama', 'NIS', 'ID_Kelas', 'tglmasuk', 'gajiortu'], 'required'],
            [['ID'], 'integer'],
            [['Nama'], 'string', 'max' => 200],
            [['NIS'], 'string', 'max' => 15],
            [['ID_Kelas'], 'string', 'max' => 10],
            [['tglmasuk'], 'date', 'max' => 15],
            [['gajiortu'], 'string'],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nama' => 'Nama',
            'NIS' => 'Nis',
            'ID_Kelas' => 'Id Kelas',
            'tglmasuk' => 'Tgl Masuk',
            'gajiortu' => 'Gaji Ortu',
        ];
    }
}
