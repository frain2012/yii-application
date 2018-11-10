<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_link".
 *
 * @property string $id
 * @property string $fid
 * @property string $name 名称
 * @property string $value 值
 * @property string $image 图片
 * @property string $link
 * @property int $sort_id 排序Id
 */
class TLink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fid', 'sort_id'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['value', 'image'], 'string', 'max' => 125],
            [['link'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'value' => 'Value',
            'image' => 'Image',
            'link' => 'Link',
            'sort_id' => 'Sort ID',
        ];
    }
}
