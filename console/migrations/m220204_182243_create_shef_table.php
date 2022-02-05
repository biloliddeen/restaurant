<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shef}}`.
 */
class m220204_182243_create_shef_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shef}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'profession' => $this->string(255),
            'link1' => $this->string(255),
            'link2' => $this->string(255),
            'link3' => $this->string(255),
            'link4' => $this->string(255),
            'image' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shef}}');
    }
}
