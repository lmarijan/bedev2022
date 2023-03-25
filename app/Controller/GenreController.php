<?php

namespace App\Controller;

use App\Models\Genre;
use core\Controller;

class GenreController extends Controller
{
    public function index()
    {
        $genres = new Genre();

        return $this->renderView('genres', [
            'genres' => $genres->findAll()
        ]);
    }
}