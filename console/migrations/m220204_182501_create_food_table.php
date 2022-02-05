<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m220204_182501_create_food_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'price' => $this->integer()->notNull(),
            'type' => $this->string(255)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-food-updated_by}}',
            '{{%food}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-food-updated_by}}',
            '{{%food}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-food-updated_by}}',
            '{{%food}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-food-updated_by}}',
            '{{%food}}'
        );

        $this->dropTable('{{%food}}');
    }
}
