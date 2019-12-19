<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa".
 *
 * @property int $ID
 * @property string $Nama
 * @property string $NIS
 * @property string $ID_Kelas
 * @property string $tglmasuk
 * @property int $gajiortu
 */
class Siswaajax extends \yii\db\ActiveRecord
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
            [['ID', 'gajiortu'], 'integer'],
            [['tglmasuk'], 'safe'],
            [['Nama'], 'string', 'max' => 200],
            [['NIS'], 'string', 'max' => 15],
            [['ID_Kelas'], 'string', 'max' => 10],
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
            'tglmasuk' => 'Tglmasuk',
            'gajiortu' => 'Gajiortu',
        ];
    }
    public function getKelas()
    {
        return $this->hasOne(Kelas::classname(), ['ID_Kelas' => 'ID_Kelas']);
    }
    public function getNama_Kelas()
    {
        return $this -> kelas->Nama_Kelas;
    }
}
