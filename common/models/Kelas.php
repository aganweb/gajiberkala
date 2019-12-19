<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $ID_Kelas
 * @property string $Nama_Kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Kelas', 'Nama_Kelas'], 'required'],
            [['ID_Kelas'], 'integer'],
            [['Nama_Kelas'], 'string', 'max' => 15],
            [['ID_Kelas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_Kelas' => 'Id Kelas',
            'Nama_Kelas' => 'Nama Kelas',
        ];
    }
    public function getSiswa(){
        return $this->hasMany(Siswa::className(),['ID_Kelas' => 'ID_Kelas']);
    }
    public function getSiswaCount()
    {
        return $this->getSiswa()->count();
    }
}
