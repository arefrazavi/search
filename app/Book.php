<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Searchable;

    // We don't want to use timestamps in this tutorial
    public $timestamps = false;

    protected $indexConfigurator = SearchIndexConfigurator::class;

    protected $searchRules = [
        BookSearchRule::class
    ];

    protected $mapping = [
        'properties' => [
            'id' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'title' => [
                'type' => 'string',
                'analyzer' => 'english'
            ],
            'description' => [
                'type' => 'string',
                'analyzer' => 'english'
            ],
            'year' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'author_id' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'author_name' => [
                'type' => 'string',
                'analyzer' => 'english'
            ]
        ]
    ];

    // Each book belongs to one author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        $array['author_name'] = $this->author->name;

        return $array;
    }
}