<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
// use App\Traits\AutoCreatedUpdated;

class AboutUs extends Model
{
    // use AutoCreatedUpdated;

    protected $table = 'about_us';

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
