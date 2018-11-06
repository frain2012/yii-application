<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_type".
 *
 * @property string $id
 * @property int $type
 * @property string $name
 * @property int $fid
 * @property int $sort_id
 */
class TType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'fid', 'sort_id'], 'integer'],
            [['name'], 'string', 'max' => 125],
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
            'name' => 'Name',
            'fid' => 'Fid',
            'sort_id' => 'Sort ID',
        ];
    }
}
