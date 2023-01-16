<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Branchmodel;
use Illuminate\Http\Request;
use App\Traits\FileSaver;
use App\Models\backend\Doctor;
use App\Models\DepartmentModel;
use Intervention\Image\Facades\Image;

class DoctorController extends Controller
{
    use FileSaver;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data['doctors']     = Doctor::orderBy('id','desc')->paginate(20);
            $data['table']       = Doctor::getTableName();
            return view('backend/page/doctor.index',$data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['branch'] = Branchmodel::all();
        $data['departments'] = DepartmentModel::orderBy('id','desc')->paginate(20);
        try {
            return view('backend/page/doctor.create', $data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        try {
            $this->storeOrUpdate($request);
            return redirect()->route('doctors.index')->with('success','Doctor Info Create Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors['branch'] = Branchmodel::all();
        $doctors['departments'] = DepartmentModel::orderBy('id','desc')->paginate(20);
        $doctors['doctors']        = Doctor::find($id);
        return view('backend/page/doctor/edit', $doctors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        try {
            $this->storeOrUpdate($request, $id);

            return redirect()->route('doctors.index')->with('success','Doctor Info Update Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $doctors = Doctor::find($id);
            if(file_exists($doctors->image)){
                unlink($doctors->image);
            }
            $doctors->delete();

            return redirect()->back()->with('success','Doctor info Deleted Success');
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
            'name'                  => 'required',
        ]);

       try {
        $doctors = Doctor::updateOrCreate([
            'id'                   =>$id,
        ],[
            'name'                 => $request->name,
            'degree'               => $request->degree,
            'branch'               => $request->branch,
            'department'           => $request->department,
            'position'             => $request->position,
            'visit_start_time'     => $request->visit_start_time,
            'visit_end_time'       => $request->visit_end_time,
            'details'              => $request->details,
            'weekday'              => implode(',', (array) $request->input('weekday')), //inserting to database as string
            'status'               => $request->status ? 1: 0,
        ]);

        $this->uploadFileWithResize($request->image, $doctors, 'image', 'images/doctors', 100, 60);

       } catch (\Throwable $th) {
        throw $th;
       }
    }
}
