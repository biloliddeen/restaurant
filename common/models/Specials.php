<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "specials".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string|null $image
 */
class Specials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content'], 'required'],
            [['content'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg, jpeg, png, webp', 'maxSize' => 10 * 1024 * 1024]
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
            'image' => 'Image',
        ];
    }
}
