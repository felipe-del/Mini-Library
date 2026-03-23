<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    // LISTA DE LIBROS
    public function index()
    {
        $data = require app_path('data/libraryData.php');
        $books = $data['books'];
        $authors = $data['authors'];
        $publishers = $data['publishers'];

        // Mapear nombres de author y publisher
        foreach ($books as &$book) {
            $author = collect($authors)->firstWhere('id', $book['author_id']);
            $publisher = collect($publishers)->firstWhere('id', $book['publisher_id']);

            $book['author'] = $author['name'] ?? 'Unknown';
            $book['publisher'] = $publisher['name'] ?? 'Unknown';
        }

        return view('books.index', compact('books'));
    }

    // DETALLE DE UN LIBRO
    public function show($id)
    {
        $data = require app_path('data/libraryData.php');
        $books = $data['books'];
        $authors = $data['authors'];
        $publishers = $data['publishers'];

        foreach ($books as $book) {
            if ($book['id'] == $id) {
                $author = collect($authors)->firstWhere('id', $book['author_id']);
                $publisher = collect($publishers)->firstWhere('id', $book['publisher_id']);

                $book['author'] = $author['name'] ?? 'Unknown';
                $book['publisher'] = $publisher['name'] ?? 'Unknown';

                // Agregar IDs de author y publisher para posibles enlaces
                $book['author_id'] = $author['id'] ?? null;
                $book['publisher_id'] = $publisher['id'] ?? null;

                return view('books.show', compact('book'));
            }
        }

        abort(404);
    }
}