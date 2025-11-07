<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'content',
        'author',
        'date_created',
    ];

    public function getAll()
    {
        return self::all();
    }

    public function create(array $data):
    {
        $article = Article::create(
            [
                'title' => $data['title'],
                'description' => $data['description'],
                'content' => $data['content'],
                'author' => $data['author']
            ]
        );
        return $article;
    }

}
