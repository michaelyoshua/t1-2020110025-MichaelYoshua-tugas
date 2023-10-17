<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Tampilkan daftar semua buku
    }

    public function create()
    {
        // Tampilkan formulir untuk membuat buku baru
    }

    public function store(Request $request)
    {
        // Simpan buku baru ke database
    }

    public function show($id)
    {
        // Tampilkan detail buku
    }

    public function edit($id)
    {
        // Tampilkan formulir untuk mengedit buku
    }

    public function update(Request $request, $id)
    {
        // Update buku di database
    }

    public function destroy($id)
    {
        // Hapus buku dari database
    }
}
