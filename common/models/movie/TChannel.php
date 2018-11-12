<?php

namespace common\models\movie;

use Yii;

/**
 * This is the model class for table "t_channel".
 *
 * @property int $id
 * @property string $name
 * @property string $key
 */
class TChannel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_channel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name', 'key'], 'string', 'max' => 32],
            [['id'], 'unique'],
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
            'key' => 'Key',
        ];
    }
}
