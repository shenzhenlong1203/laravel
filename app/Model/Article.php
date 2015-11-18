<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Redis;

class Article extends Model
{
    const REDIS_ARTICLE_CACHE = 'redis_article_cache_';
    static $cacheMinutes = 144000;

    protected $fillable = [
        'title',
        'introduction',
        'content',
        'published_at'
    ];

    public static function getArticleById($id)
    {
        $article = self::find($id);
        $redis = new Redis();
        $redis->connect('127.0.0.1');
        $redis->set(self::REDIS_ARTICLE_CACHE . $id, $article, self::$cacheMinutes);
        return $article;
    }
}
