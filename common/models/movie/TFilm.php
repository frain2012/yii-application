<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_film".
 *
 * @property string $id
 * @property string $name
 * @property string $cover 封面
 * @property string $staring 主演
 * @property string $director 导演
 * @property int $type 类型(1-电影，2->电视剧，3->动漫，4->综艺)
 * @property string $sub_type
 * @property string $area
 * @property int $year 年份
 * @property string $introduce 简介
 * @property string $create_at
 */
class TFilm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_film';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'year'], 'integer'],
            [['create_at'], 'safe'],
            [['name', 'cover', 'staring', 'director', 'introduce'], 'string', 'max' => 255],
            [['sub_type'], 'string', 'max' => 32],
            [['area'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cover' => 'Cover',
            'staring' => 'Staring',
            'director' => 'Director',
            'type' => 'Type',
            'sub_type' => 'Sub Type',
            'area' => 'Area',
            'year' => 'Year',
            'introduce' => 'Introduce',
            'create_at' => 'Create At',
        ];
    }
}
