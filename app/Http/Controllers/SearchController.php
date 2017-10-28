<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getResults()
    {
        $authorName = Author::first()->name;
        $resultsByAuthorName = Book::search($authorName)->get();

        $results = Book::search("Alice")
            ->orWhere('year', '<', 2008)
            ->orWhere('year', '>', 2016)
            ->orderBy("year", "DESC")
            ->take(30)
            ->get();

        $sqlResults = DB::table('users')
            ->where('year', '<', '2008')
            ->orWhere(
                function ($query) {
                    $query->where('year', '>', 2016)
                        ->where('title', '<>', 'Alice');
                }
            )->get();

        return view('search-results', compact('results', 'resultsByAuthorName', 'authorName'));

    }
}
