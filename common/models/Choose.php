<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "choose".
 *
 * @property int $id
 * @property string $name
 * @property string|null $content
 */
class Choose extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'choose';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'content' => 'Content',
        ];
    }
}
