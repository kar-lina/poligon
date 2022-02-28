<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;

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
