<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%region}}`.
 */
class m210217_152615_create_region_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%region}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(35)->notNull(),
            'block' => $this->string(101)->notNull(),
            'plage' => $this->string(101)->unique()->notNull(),
            'subnet' => $this->string(101)->notNull(),
            'interface' => $this->string(105)->notNull(),
            'number_of_ip' => $this->integer(1)->notNull(),
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
        $this->dropTable('{{%region}}');
    }
}
