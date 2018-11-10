<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_spider".
 *
 * @property string $id
 * @property int $type 类型（1-电影）,2-电视剧
 * @property string $link 地址（抓取地址）
 * @property int $stype 1-index,2-list,3-详情
 * @property string $charset
 */
class TSpider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_spider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'stype'], 'integer'],
            [['link'], 'string', 'max' => 255],
            [['charset'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'link' => 'Link',
            'stype' => 'Stype',
            'charset' => 'Charset',
        ];
    }
}
