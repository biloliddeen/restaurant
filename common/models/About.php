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
            [['title', 'link'], 'required'],
            [['description'], 'string'],
            [['title', 'link'], 'string', 'max' => 255],
            [['image'],'file', 'extensions' => 'png, jpg, jpeg, webp', 'maxSize' => 10 * 1024 * 1024],
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
