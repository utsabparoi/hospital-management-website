<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoCreatedUpdated;

class Doctor extends Model
{
    use AutoCreatedUpdated;

    protected $table = 'doctors';

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
