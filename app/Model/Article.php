<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cache;
//use Illuminate\Contracts\Cache;

class Article extends Model
{
    const REDIS_ARTICLE_CACHE = 'redis_article_cache_';
    static $cacheMinutes = 144000;

    protected $fillable = [
        'title',
        'introduction',
        'content',
        'published_at',
        'user_id'
    ];

    protected $dates = [
        'published_at'
    ];

    public static function getArticleById($id)
    {
        if ($article = Cache::get(self::REDIS_ARTICLE_CACHE.$id))
        {
            return $article;
        }
        $article = self::find($id);
        if ($article)
        {
            Cache::add(self::REDIS_ARTICLE_CACHE.$id, $article, self::$cacheMinutes);
        }
        return $article;
    }

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function users()
    {
        $this->belongsTo('App\User');
    }
}
