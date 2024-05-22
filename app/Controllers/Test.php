<?php

namespace App\Controllers;


use App\Models\BooksModel;

use function PHPUnit\Framework\throwException;

class Test extends BaseController
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

          

       

        // $db = \Config\Database::connect();
        // $buku = $db->query("SELECT * FROM books");
        // foreach ($buku->getResultArray() as $row) {
        //     d($row);
        // }

        // $booksModel = new \App\Models\BooksModel();
        // $booksModel = new BooksModel();
        // $daftar = $booksModel->findAll();
        return view('test');
    }



   
}
