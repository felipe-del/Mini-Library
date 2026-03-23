<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // LISTA
    public function index()
    {
        $data = require app_path('data/libraryData.php');
        $authors = $data['authors'];

        return view('authors.index', compact('authors'));
    }

    // DETALLE
    public function show($id)
    {
        $data = require app_path('data/libraryData.php');
        $authors = $data['authors'];
        $books = $data['books'];

        foreach ($authors as $author) {
            if ($author['id'] == $id) {
                // Filtrar libros de este autor
                $authorBooks = array_filter($books, function($book) use ($id) {
                    return $book['author_id'] == $id;
                });

                return view('authors.show', compact('author', 'authorBooks'));
            }
        }

        abort(404);
    }
}