<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shef".
 *
 * @property int $id
 * @property string $name
 * @property string|null $profession
 * @property string|null $link1
 * @property string|null $link2
 * @property string|null $link3
 * @property string|null $link4
 * @property string|null $image
 */
class Shef extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shef';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'profession', 'image'], 'required'],
            [['name', 'profession', 'link1', 'link2', 'link3', 'link4'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg, jpeg, png, webp', 'maxSize' => 10*1024*1024]
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
            'profession' => 'Profession',
            'link1' => 'Twitter Profile Link',
            'link2' => 'Facebook Profile Link',
            'link3' => 'Instagram Profile Link',
            'link4' => 'Linkedin Profile Link',
            'image' => 'Image',
        ];
    }
}
