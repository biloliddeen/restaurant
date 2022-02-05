<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $name
 * @property string|null $profession
 * @property string|null $description
 * @property string|null $image
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name', 'profession', 'image'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
