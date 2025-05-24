<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
class Produk extends BaseController
{
    protected $ProdukModel;

    public function __construct()
    {
        // Inisialisasi model di dalam konstruktor
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Master Data',
            'subtitle' => 'Produk',
            'menu' => 'masterdata',
            'submenu' => 'produk',
            'page' => 'v_produk',
            'produk' => $this->ProdukModel->allData(),
            'kategori' => $this->ProdukModel->allData(),
            'satuan' => $this->ProdukModel->allData(),
        ];
        return view('v_template', $data);
    }

    public function insertProduk()
    {

        if (
            $this->validate(
                [
                    'kode_produk' => [
                        'label' => 'Kode Produk/Barcode',
                        'rules' => 'is_unique[produk.kode_produk]',
                        'errors' => [
                            'is_unique' => '{field} Sudah ada, Masukkan kode lain!'
                        ]
                    ],
                    'id_kategori' => [
                        'label' => 'Kategori',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Belum dipilih!'
                        ]
                    ],
                    'id_satuan' => [
                        'label' => 'Satuan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Belum dipilih!'
                        ]
                    ]

                ]
            )
        ) {
            $hargabeli = str_replace(",", "", $this->request->getPost('harga_beli'));
            $hargajual = str_replace(",", "", $this->request->getPost('harga_jual'));
            $data = [
                'kode_produk' => $this->request->getPost('kode_produk'),
                'nama_produk' => $this->request->getPost('nama_produk'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'harga_beli' => $hargabeli,
                'harga_jual' => $hargajual,
                'stok' => $this->request->getPost('stok'),
                'id_satuan' => $this->request->getPost('id_satuan'),
            ];
            $this->ProdukModel->insertProduk($data); // post to db
            session()->setFlashdata('success', 'Produk berhasil ditambahkan!');
            return redirect()->to('Produk');
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Produk'))->withInput();
        }
    }

    public function updateProduk($id)
    {
        if (
            $this->validate(
                [
                    'kode_produk' => [
                        'label' => 'Kode Produk/Barcode',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} belum diisi!'
                        ]
                    ],
                    'id_kategori' => [
                        'label' => 'Kategori',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Belum dipilih!'
                        ]
                    ],
                    'id_satuan' => [
                        'label' => 'Satuan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Belum dipilih!'
                        ]
                    ]

                ]
            )
        ) {
            $hargabeli = str_replace(",", "", $this->request->getPost('harga_beli'));
            $hargajual = str_replace(",", "", $this->request->getPost('harga_jual'));
            $data = [
                'id' => $id,
                'kode_produk' => $this->request->getPost('kode_produk'),
                'nama_produk' => $this->request->getPost('nama_produk'),
                'id_kategori' => $this->request->getPost('id_kategori'),
                'harga_beli' => $hargabeli,
                'harga_jual' => $hargajual,
                'stok' => $this->request->getPost('stok'),
                'id_satuan' => $this->request->getPost('id_satuan'),
            ];
            $this->ProdukModel->updateProduk($data); // post to db
            session()->setFlashdata('success', 'Produk berhasil diperbarui!');
            return redirect()->to('Produk');
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Produk'))->withInput();
        }
    }

    public function deleteProduk($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->ProdukModel->deleteProduk($data); // post to db
        session()->setFlashdata('success', 'Produk berhasil dihapus!');
        return redirect()->to('Produk');
    }

}
