<?php

use yii\db\Migration;

/**
 * Class m220919_163228_spk
 */
class m220919_163228_spk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%spk}}',
            [
                'id'=> $this->primaryKey(11),
                'nama_asrama'=> $this->string(100)->notNull(),
                'kebersihan'=> $this->integer(11)->notNull(),
                'fasilitas'=> $this->integer(11)->notNull(),
                'kenyamanan'=> $this->integer(11)->notNull(),
                'suasana'=> $this->integer(11)->notNull(),
                'nilai_hasil'=> $this->double()->notNull(),
            ],$tableOptions
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%spk}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220919_163228_spk cannot be reverted.\n";

        return false;
    }
    */
}
