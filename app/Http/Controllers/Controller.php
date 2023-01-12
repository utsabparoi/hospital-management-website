<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
        return 111;

        if ($request->ajax()) {
            return 111;

            $request->status == 'Active' ? $status = 0 : $status = 1;
            DB::table($table)->whereId($request->item_id)->update(['status' => $status]);

            return response()->json(['status' => $status, 'item_id' => $request->item_id]);
        }
    }
}

