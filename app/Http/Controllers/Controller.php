<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     |--------------------------------------------------------------------------
     | UPDATE STATUS METHOD
     |--------------------------------------------------------------------------
    */
    public function updateStatus(Request $request, $table)
    {
        if ($request->ajax()) {

            $request->status == 'Active' ? $status = 0 : $status = 1;
            DB::table($table)->where('id',$request->item_id)->update(['status' => $status]);

            return response()->json(['status' => $status, 'item_id' => $request->item_id]);
        }
    }
}

