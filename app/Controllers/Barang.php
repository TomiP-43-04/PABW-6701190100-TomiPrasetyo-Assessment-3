<?php


namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {

        $barang = $this->barangModel->findAll();

        $data = [

            'barang' => $barang
        ];

        return view('/index', $data);
    }
    public function detailbarang()
    {

        $barang = $this->barangModel->findAll();

        $data = [

            'barang' => $barang
        ];

        return view('/detailbarang', $data);
    }
}
