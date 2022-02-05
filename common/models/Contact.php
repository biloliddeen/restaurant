<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $location
 * @property string $days_hours
 * @property string $email1
 * @property string|null $email2
 * @property string $call1
 * @property string|null $call2
 * @property string $link1
 * @property string|null $link2
 * @property string|null $link3
 * @property string|null $link4
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location', 'days_hours', 'email1', 'call1', 'link1'], 'required'],
            [['location', 'days_hours', 'email1', 'email2', 'call1', 'call2', 'link1', 'link2', 'link3', 'link4'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location' => 'Location',
            'days_hours' => 'Days Hours',
            'email1' => 'Email1',
            'email2' => 'Email2',
            'call1' => 'Call1',
            'call2' => 'Call2',
            'link1' => 'Link1',
            'link2' => 'Link2',
            'link3' => 'Link3',
            'link4' => 'Link4',
        ];
    }
}
