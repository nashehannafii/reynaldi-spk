<?php

use yii\db\Migration;

/**
 * Class m220919_163147_bobot
 */
class m220919_163147_bobot extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%bobot}}',
            [
                'id' => $this->primaryKey(11),
                'jenis_bobot' => $this->string(100)->notNull(),
                'bobot' => $this->integer(11)->notNull(),
                'keterangan_bobot' => $this->string(255)->notNull(),
            ],
            $tableOptions
        );
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '10',
            'keterangan_bobot'=>'Mumtaz'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '9',
            'keterangan_bobot'=>'Jayyid Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '8',
            'keterangan_bobot'=>'Jayyid'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '7',
            'keterangan_bobot'=>'Thoyyib Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '6',
            'keterangan_bobot'=>'Thoyyib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '5',
            'keterangan_bobot'=>'Maqbul'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '4',
            'keterangan_bobot'=>'Naqis'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '3',
            'keterangan_bobot'=>'Naqis Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '2',
            'keterangan_bobot'=>'Rosib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kebersihan',
            'bobot' => '1',
            'keterangan_bobot'=>'Goiru Maqbul'
        ]);




        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '10',
            'keterangan_bobot'=>'Mumtaz'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '9',
            'keterangan_bobot'=>'Jayyid Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '8',
            'keterangan_bobot'=>'Jayyid'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '7',
            'keterangan_bobot'=>'Thoyyib Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '6',
            'keterangan_bobot'=>'Thoyyib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '5',
            'keterangan_bobot'=>'Maqbul'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '4',
            'keterangan_bobot'=>'Naqis'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '3',
            'keterangan_bobot'=>'Naqis Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '2',
            'keterangan_bobot'=>'Rosib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'fasilitas',
            'bobot' => '1',
            'keterangan_bobot'=>'Goiru Maqbul'
        ]);



        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '10',
            'keterangan_bobot'=>'Mumtaz'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '9',
            'keterangan_bobot'=>'Jayyid Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '8',
            'keterangan_bobot'=>'Jayyid'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '7',
            'keterangan_bobot'=>'Thoyyib Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '6',
            'keterangan_bobot'=>'Thoyyib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '5',
            'keterangan_bobot'=>'Maqbul'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '4',
            'keterangan_bobot'=>'Naqis'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '3',
            'keterangan_bobot'=>'Naqis Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '2',
            'keterangan_bobot'=>'Rosib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'kenyamanan',
            'bobot' => '1',
            'keterangan_bobot'=>'Goiru Maqbul'
        ]);




        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '10',
            'keterangan_bobot'=>'Mumtaz'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '9',
            'keterangan_bobot'=>'Jayyid Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '8',
            'keterangan_bobot'=>'Jayyid'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '7',
            'keterangan_bobot'=>'Thoyyib Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '6',
            'keterangan_bobot'=>'Thoyyib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '5',
            'keterangan_bobot'=>'Maqbul'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '4',
            'keterangan_bobot'=>'Naqis'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '3',
            'keterangan_bobot'=>'Naqis Jiddan'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '2',
            'keterangan_bobot'=>'Rosib'
        ]);
        $this->insert('bobot', [
            'jenis_bobot' => 'suasana',
            'bobot' => '1',
            'keterangan_bobot'=>'Goiru Maqbul'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bobot}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220919_163147_bobot cannot be reverted.\n";

        return false;
    }
    */
}
