<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;

class ArticleandNews extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'articles_and_news';

    protected $guarded = [];

    public function scopeApiQuery($query)
    {
        $query->active();
    }
}
