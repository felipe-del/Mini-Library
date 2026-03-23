<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // LISTA
    public function index()
    {
        $data = require app_path('data/libraryData.php');
        $publishers = $data['publishers'];
        return view('publishers.index', compact('publishers'));
    }

    // DETALLE
    public function show($id)
    {
        $data = require app_path('data/libraryData.php');
        $publishers = $data['publishers'];
        $books = $data['books'];

        foreach ($publishers as $publisher) {
            if ($publisher['id'] == $id) {
                // Filtrar libros de este publisher
                $publisherBooks = array_filter($books, function($book) use ($id) {
                    return $book['publisher_id'] == $id;
                });

                return view('publishers.show', compact('publisher', 'publisherBooks'));
            }
        }

        abort(404);
    }
}