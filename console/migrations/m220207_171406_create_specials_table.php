<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%specials}}`.
 */
class m220207_171406_create_specials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%specials}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'image' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%specials}}');
    }
}
