<?php

namespace App\Controllers;


use App\Models\BooksModel;

use function PHPUnit\Framework\throwException;

class Pages extends BaseController
{
     public function __construct()
    {
        $this->booksModel = new BooksModel();
    }

    public function index()
    {
  // $data = [
        //     'title' => 'About | KMUHI TV'
        // ];
          // $daftar = $this->booksModel->findAll();

          

        //   GOOD
        $daftar = $this->booksModel->getBooks();
        $data = [
            'title' => 'Daftar Buku',
            'books' => $daftar
        ];

        // $db = \Config\Database::connect();
        // $buku = $db->query("SELECT * FROM books");
        // foreach ($buku->getResultArray() as $row) {
        //     d($row);
        // }

        // $booksModel = new \App\Models\BooksModel();
        // $booksModel = new BooksModel();
        // $daftar = $booksModel->findAll();
        return view('pages/home', $data);
    }

    public function about()
    {
        // $data = [
        //     'title' => 'About | KMUHI TV'
        // ];
          // $daftar = $this->booksModel->findAll();
        $daftar = $this->booksModel->getBooks();
        $data = [
            'title' => 'Daftar Buku',
            'books' => $daftar
        ];

        // $db = \Config\Database::connect();
        // $buku = $db->query("SELECT * FROM books");
        // foreach ($buku->getResultArray() as $row) {
        //     d($row);
        // }

        // $booksModel = new \App\Models\BooksModel();
        // $booksModel = new BooksModel();
        // $daftar = $booksModel->findAll();
        
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | KMUHI TV',
            'alamat' => [
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'Klotok',
                    'kota' => 'Kediri'
                ],
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Kemlokolegi',
                    'kota' => 'Nganjuk'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
