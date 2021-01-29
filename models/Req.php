<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "req".
 *
 * @property string $id
 * @property string $judul
 * @property string $deskripsi
 * @property string|null $atas_nama
 * @property string|null $surel
 * @property int|null $didukung
 * @property int|null $dibagikan
 */
class Req extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'req';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi'], 'required'],
            [['id', 'judul', 'deskripsi', 'atas_nama', 'surel'], 'string'],
            [['didukung', 'dibagikan'], 'default', 'value' => 0],
            [['didukung', 'dibagikan'], 'integer'],
            [['created_at'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'judul' => Yii::t('app', 'Title'),
            'deskripsi' => Yii::t('app', 'Description'),
            'atas_nama' => Yii::t('app', 'Your name'),
            'surel' => Yii::t('app', 'Your email'),
            'didukung' => Yii::t('app', 'Didukung'),
            'dibagikan' => Yii::t('app', 'Dibagikan'),
            'created_at' => Yii::t('app', 'Created At')
        ];
    }
}
