<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%restaurant}}`.
 */
class m220204_193411_create_restaurant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%restaurant}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'image' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%restaurant}}');
    }
}
