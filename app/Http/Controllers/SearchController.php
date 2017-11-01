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
         $resultsByAuthorName = Book::search($authorName)->where('year', '<', 2008)->get();

//        $results = Book::search("Alice")
//            ->advancedWhere('year', '<', 2008)
//            ->orWhere(
//                function ($query) {
//                    $query->advancedWhere('year', '>', 2016)
//                        ->advancedWhere('author_id', '33');
//                }
//            )
//            ->orderBy("year", "DESC")
//            ->take(30)
//            ->get();

//        $results = DB::table('books')
//            ->where('year', '<', '2008')
//            ->orWhere(
//                function ($query) {
//                    $query->where('year', '>', 2016)
//                        ->where('title', '<>', 'Alice');
//                }
//            )->get();

        return view('search-results', compact('results', 'resultsByAuthorName', 'authorName'));

    }
}
