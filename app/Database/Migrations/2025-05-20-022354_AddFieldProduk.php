<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFieldProduk extends Migration
{
    public function up()
    {
        // $fields = [
        //     'kode_produk' => ['type' => 'INT', 'constaraint' => 25, 'after' => 'id'],
        //     'harga_beli' => ['type' => 'INT', 'constaraint' => 40, 'after' => 'nama_produk'],
        //     'harga_jual' => ['type' => 'INT', 'constaraint' => 40, 'after' => 'harga_beli'],
        //     'id_satuan' => ['type' => 'INT', 'constaraint' => 10, 'after' => 'harga_jual']
        // ];
        // $this->forge->addColumn('produk', $fields);


        $modifyFields = [
            'created_at' => ['null' => false],
        ];
        $this->forge->modifyColumn('produk', $modifyFields);

        $drop = [
            'harga' => ['type' => 'INT']
        ];
        $this->forge->dropColumn('produk', $drop);
    }

    public function down()
    {
        $modifyFields = [
            'created_at' => ['null' => true],
        ];
        $this->forge->modifyColumn('produk', $modifyFields);

        // $this->forge->dropColumn('produk', ['kode_produk', 'harga_beli', 'harga_jual', 'id_satuan']);

        $this->forge->addColumn('produk', 'harga');
    }
}
