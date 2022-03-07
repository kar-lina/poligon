<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 
 * @package App/Models 
 * @property App/Models/BlogCategory $category
 * @property App/Models/User
 * @property string $title
 * @property string $slug
 * @property string $content_html
 * @property string $content_raw
 * @property string $excerpt
 * @property string $published_at
 * @property boolean $is_published
 * 
 */

class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'excerpt',
        'content_raw',
        'is_published',
        'published_at',
        'user_id',
    ];

    /**
     * Категории сатьи 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function category()
    {

        //Сатья принадлежит категории
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Автор статьи
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function user()
    {

        //Сатья принадлежит пользователю
        return $this->belongsTo(User::class);
    }
}
