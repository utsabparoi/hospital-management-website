<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;

class Slider extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'sliders';

    protected $guarded = [];

    /*
     |--------------------------------------------------------------------------
     | ACTIVE SCOPE
     |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        $query->where('status', 1);
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
