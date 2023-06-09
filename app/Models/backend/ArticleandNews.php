<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;

class ArticleandNews extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'articles_and_news';

    protected $guarded = [];

    public function scopeActive($q)
    {
        return $q->where('status',1);
    }

    public function scopeApiQuery($query)
    {
        $query->active();
    }

    /*
     |--------------------------------------------------------------------------
     | GET TABLE NAME
     |--------------------------------------------------------------------------
    */
    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
