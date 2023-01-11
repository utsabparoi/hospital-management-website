<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;
// use App\view\Components\Model;

class Slider extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'sliders';

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
