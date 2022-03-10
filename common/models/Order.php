<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $date
 * @property string $time
 * @property int $count
 * @property string|null $message
 * @property int|null $created_at
 * @property int|null $active
 */
class Order extends \yii\db\ActiveRecord
{
    const STATUS_ACTIVE = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'date', 'time', 'count'], 'required'],
            [['date'], 'datetime', 'format' => 'yyyy-mm-dd'],
            [['time'], 'string', 'max' => 50],
            [['count', 'created_at', 'active'], 'integer'],
            [['message'], 'string'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            ['active', 'default', 'value' => self::STATUS_ACTIVE],
        ];
    }
    
    /**
         * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => false
                ]
            ]
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
            'email' => 'Email',
            'phone' => 'Phone',
            'date' => 'Date',
            'time' => 'Time',
            'count' => 'Count',
            'message' => 'Message',
            'created_at' => 'Created At',
            'active' => 'Active',
        ];
    }
}
