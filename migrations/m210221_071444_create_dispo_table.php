<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dispo}}`.
 */
class m210221_071444_create_dispo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dispo}}', [
            'id' => $this->primaryKey()->unsigned(),
            'plage' => $this->string(101)->unique()->notNull(),
            'status' => $this->string(15)->notNull(),
            'updated_date' => $this->timestamp()->notNull(),
            'created_date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dispo}}');
    }
}
