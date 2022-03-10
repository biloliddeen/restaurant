<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "packages".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string|null $description
 * @property string $image
 */
class Packages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'image'], 'required'],
            [['price'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'jpg, png, jpeg, webp', 'maxSize' => 10*1024*1024]
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
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
