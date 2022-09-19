<?php

use yii\db\Migration;

/**
 * Class m220919_163223_weight
 */
class m220919_163223_weight extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';
        $this->createTable(
            '{{%weight}}',
            [
                'id'=> $this->integer(11)->null()->defaultValue(1),
                'kebersihan'=> $this->double()->notNull(),
                'fasilitas'=> $this->double()->notNull(),
                'kenyamanan'=> $this->double()->notNull(),
                'suasana'=> $this->double()->notNull(),
            ],$tableOptions
        );
        $this->insert('weight', [
            'kebersihan' => 5,
            'fasilitas' => 4,
            'kenyamanan' => 5,
            'suasana'=> 4,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%weight}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220919_163223_weight cannot be reverted.\n";

        return false;
    }
    */
}
