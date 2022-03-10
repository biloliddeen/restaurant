<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact}}`.
 */
class m220204_182127_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact}}', [
            'id' => $this->primaryKey(),
            'location' => $this->string(255)->notNull(),
            'from_hour' => $this->string(50)->notNull(),
            'to_hour' => $this->string(50)->notNull(),
            'email1' => $this->string(255)->notNull(),
            'email2' => $this->string(255),
            'call1' => $this->string(255)->notNull(),
            'call2' => $this->string(255),
            'link1' => $this->string(255)->notnull(),
            'link2' => $this->string(255),
            'link3' => $this->string(255),
            'link4' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact}}');
    }
}
