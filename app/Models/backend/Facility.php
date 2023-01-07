<?php

namespace App\Models\backend;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;

class Facility extends Model
{
    use AutoCreatedUpdated;


    protected $table = 'facilities';

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
