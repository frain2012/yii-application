<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_film_detail".
 *
 * @property string $id
 * @property string $fid film中的id
 * @property int $type 渠道
 * @property string $key 值
 * @property string $value url
 * @property string $create_at
 * @property int $sort_id
 */
class TFilmDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_film_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fid', 'type', 'sort_id'], 'integer'],
            [['create_at'], 'safe'],
            [['key'], 'string', 'max' => 32],
            [['value'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fid' => 'Fid',
            'type' => 'Type',
            'key' => 'Key',
            'value' => 'Value',
            'create_at' => 'Create At',
            'sort_id' => 'Sort ID',
        ];
    }
}
