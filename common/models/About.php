<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $image
 * @property string $link
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image', 'link'], 'required'],
            [['description'], 'string'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'link' => 'Link',
        ];
    }
}
