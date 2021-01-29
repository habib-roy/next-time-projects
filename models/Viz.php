<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viz".
 *
 * @property string $id
 * @property string $judul
 * @property string|null $deskripsi
 * @property string|null $penjelasan
 * @property string $tipe
 * @property int|null $suka
 * @property int|null $tidak_suka
 * @property int|null $dilihat
 * @property int|null $dibagikan
 * @property string|null $sampul
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $deleted_at
 * @property bool|null $terbit
 */
class Viz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul'], 'required'],
            [['id', 'judul', 'deskripsi', 'penjelasan', 'tipe', 'sampul', 'slug'], 'string'],
            [['suka', 'tidak_suka', 'dilihat', 'dibagikan'], 'default', 'value' => 0],
            [['suka', 'tidak_suka', 'dilihat', 'dibagikan'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['terbit', 'favorite'], 'boolean'],
            [['terbit', 'favorite'], 'default', 'value' => false],
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
            'slug' => Yii::t('app', 'Slug'),
            'judul' => Yii::t('app', 'Judul'),
            'deskripsi' => Yii::t('app', 'Deskripsi'),
            'penjelasan' => Yii::t('app', 'Penjelasan'),
            'tipe' => Yii::t('app', 'Tipe'),
            'suka' => Yii::t('app', 'Suka'),
            'tidak_suka' => Yii::t('app', 'Tidak Suka'),
            'dilihat' => Yii::t('app', 'Dilihat'),
            'dibagikan' => Yii::t('app', 'Dibagikan'),
            'sampul' => Yii::t('app', 'Sampul'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
            'terbit' => Yii::t('app', 'Terbit'),
            'favorite' => Yii::t('app', 'Favorite'),
        ];
    }
}
