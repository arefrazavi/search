<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use Searchable;


    // We don't want to use timestamps in this tutorial
    public $timestamps = false;

    protected $indexConfigurator = SearchIndexConfigurator::class;

    protected $searchRules = [
        //
    ];

    protected $mapping = [
        'properties' => [
            'id' => [
                'type' => 'integer',
                'index' => 'not_analyzed'
            ],
            'name' => [
                'type' => 'string',
                'analyzer' => 'english'
            ]
        ]
    ];

    // Each author can write several books
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}