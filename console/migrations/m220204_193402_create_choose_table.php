<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%choose}}`.
 */
class m220204_193402_create_choose_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%choose}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%choose}}');
    }
}
