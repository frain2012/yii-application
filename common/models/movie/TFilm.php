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
 * @property string $tip
 * @property string $quality
 * @property string $create_at
 * @property string $origin 来源
 * @property string $fname
 * @property string $gname
 * @property string $gtype
 * @property string $lang
 * @property string $word
 * @property string $start
 * @property string $icomment
 * @property string $dcomment
 * @property string $sizes
 * @property string $time
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
            [['name', 'area', 'gtype'], 'string', 'max' => 125],
            [['cover', 'director', 'fname', 'gname'], 'string', 'max' => 255],
            [['staring', 'introduce', 'tip'], 'string', 'max' => 2048],
            [['sub_type', 'quality', 'word', 'time'], 'string', 'max' => 32],
            [['origin', 'lang', 'start', 'icomment', 'dcomment', 'sizes'], 'string', 'max' => 64],
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
            'tip' => 'Tip',
            'quality' => 'Quality',
            'create_at' => 'Create At',
            'origin' => 'Origin',
            'fname' => 'Fname',
            'gname' => 'Gname',
            'gtype' => 'Gtype',
            'lang' => 'Lang',
            'word' => 'Word',
            'start' => 'Start',
            'icomment' => 'Icomment',
            'dcomment' => 'Dcomment',
            'sizes' => 'Sizes',
            'time' => 'Time',
        ];
    }
}
