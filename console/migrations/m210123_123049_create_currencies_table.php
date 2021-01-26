<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%currencies}}`.
 */
class m210123_123049_create_currencies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%currencies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(3),
            'rate' => $this->float()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%currencies}}');
    }
}
