<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%packages}}`.
 */
class m220204_182402_create_packages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%packages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->integer()->notNull(),
            'description' => $this->text(),
            'image' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%packages}}');
    }
}
