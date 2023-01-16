<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branchmodel extends Model
{
    protected $table = 'branch';
    protected $guarded = [];
//    public $primaryKey = 'id';
//    public $incrementing = true;
//    public $keyType = 'int';
//    public $timestamps = true;
    //use HasFactory;
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
