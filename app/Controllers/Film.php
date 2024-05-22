<?php

namespace App\Controllers;

use App\Models\BooksModel;

use function PHPUnit\Framework\throwException;

class Film extends BaseController
{
    protected $booksModel;
    public function __construct()
    {
        $this->booksModel = new BooksModel();
    }
 

    public function detail($slug)
    {
        // $detail = $this->booksModel->where(['slug' => $slug])->first();
        $detail = $this->booksModel->getBooks($slug);

        $data = [
            'title' => 'Detail | KMUHI TV',
            'books' => $detail
        ];

        if (empty($data['books'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Buku ' . $slug . ' tidak ditemukan');
        }

        return view('film/detail', $data);
        // echo $slug;
    }

}
