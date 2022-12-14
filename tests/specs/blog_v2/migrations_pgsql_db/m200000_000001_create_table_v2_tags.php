<?php

/**
 * Table for Tag
 */
class m200000_000001_create_table_v2_tags extends \yii\db\Migration
{
    public function safeUp()
    {
        $this->createTable('{{%v2_tags}}', [
            'id' => $this->bigPrimaryKey(),
            0 => 'name varchar(100) NOT NULL',
        ]);
        $this->createIndex('v2_tags_name_key', '{{%v2_tags}}', 'name', true);
    }

    public function safeDown()
    {
        $this->dropIndex('v2_tags_name_key', '{{%v2_tags}}');
        $this->dropTable('{{%v2_tags}}');
    }
}
