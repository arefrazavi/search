<?php
namespace App;
use ScoutElastic\SearchableModel;

class Author extends SearchableModel
{
    public $timestamps = false;
    protected $indexConfigurator = SearchIndexConfigurator::class;
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