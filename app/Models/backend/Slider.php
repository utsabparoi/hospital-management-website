<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'sliders';

    protected $guarded = [];

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
