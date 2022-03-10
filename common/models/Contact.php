<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $location
 * @property string $from_hour
 * @property string $to_hour
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
            [['location', 'from_hour', 'to_hour', 'email1', 'call1'], 'required'],
            [['location', 'email1', 'email2', 'call1', 'call2', 'link1', 'link2', 'link3', 'link4'], 'string', 'max' => 255],
            [['from_hour', 'to_hour'], 'string', 'max' => 50],
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
            'from_hour' => 'Open',
            'to_hour' => 'Close',
            'email1' => 'Email 1',
            'email2' => 'Email 2',
            'call1' => 'Phone Number 1',
            'call2' => 'Phone Number 2',
            'link1' => 'Twitter Link',
            'link2' => 'Facebook Link',
            'link3' => 'Instagram Link',
            'link4' => 'Linkedin Link',
        ];
    }
    public static function getContact(){
        return  Contact::find()->asArray()->all();
    }
}
