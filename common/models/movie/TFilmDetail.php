<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_film_detail".
 *
 * @property string $id
 * @property string $fid film中的id
 * @property string $type
 * @property string $key
 * @property string $value
 * @property string $create_at
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
            [['fid'], 'integer'],
            [['create_at'], 'safe'],
            [['type', 'key'], 'string', 'max' => 32],
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
        ];
    }
}
