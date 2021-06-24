<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_barang' => 'Semangka Merah',
				'jenis_barang'    => 'Buah-buahan',
				'harga_barang'    => 45000,
				'deskripsi'    => 'Semangka Merah semerah merahnya semangka, cakep',
				'gambar'    => 'semangka.jpg'
			],
			[
				'nama_barang' => 'Melon kundang',
				'jenis_barang'    => 'Buah-buahan',
				'harga_barang'    => 38000,
				'deskripsi'    => 'Melon melon sendiri, tidur juga sendiri',
				'gambar'    => 'melonorange.jpg'
			]
		];

		// Using Query Builder
		$this->db->table('barang')->insertBatch($data);
	}
}
