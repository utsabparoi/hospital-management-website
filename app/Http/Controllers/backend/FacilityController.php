<?php

namespace App\Http\Controllers\backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\backend\Facility;

class FacilityController extends Controller
{
    use FileSaver;
    /**
     * =============================================
     * INDEX METHOD
     * =============================================
     **/
    public function index()
    {
        try {
            $data['facilities'] = Facility::orderBy('id','desc')->paginate(20);
            $data['table']      = Facility::getTableName();
            return view('backend/page/facility.index',$data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }

    }

    /**
     * =============================================
     * Created Method
     * =============================================
     **/
    public function create()
    {
        try {
            return view('backend/page/facility.create');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * =============================================
     * Store Method
     * =============================================
     **/
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image'          => 'required',
        ]);

        try {
            $this->storeOrUpdate($request);

            return redirect()->route('facilities.index')->with('success','Facility Create Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * =============================================
     * Show Method
     * =============================================
     **/
    public function show($id)
    {
        //
    }

    /**
     * =============================================
     * Edit Method
     * =============================================
     **/
    public function edit($id)
    {
        $facility  = Facility::find($id);
        return view('backend/page/facility/edit', compact('facility'));
    }

    /**
     * =============================================
     * Update Method
     * =============================================
     **/
    public function update(Request $request, $id)
    {
        try {
            $this->storeOrUpdate($request, $id);

            return redirect()->route('facilities.index')->with('success','Facility Update Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * =============================================
     * Destroy Method
     * =============================================
     **/
    public function destroy($id)
    {
        $facility = Facility::find($id);
        try {
            if(file_exists($facility->image)){
                unlink($facility->image);
            }
            $facility->delete();

            return redirect()->back()->with('success','Facility Deleted Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /*
     |--------------------------------------------------------------------------
     | STORE OR UPDATE  METHOD
     |--------------------------------------------------------------------------
    */
    public function storeOrUpdate($request, $id = null)
    {
        $request->validate([
            'title'                  => 'required',
        ]);

       try {
        $facility = Facility::updateOrCreate([
            'id'                    =>$id,
        ],[
            'title'                 =>$request->title,
            'icon'                  =>$request->icon,
            'description'           =>$request->description,
            'status'                =>$request->status ? 1: 0,
        ]);

        $this->uploadFileWithResize($request->image, $facility, 'image', 'images/facility', 400, 400);


       } catch (\Throwable $th) {
        throw $th;
       }
    }
}
