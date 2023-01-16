<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Branchmodel;
use App\Traits\FileSaver;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BranchController extends Controller
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
            $data['branch'] = Branchmodel::paginate(3);
            $data['table']      = Branchmodel::getTableName();
            return view('backend.page.branch.index', $data);
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
        try {
            return view('backend.page.branch.create');
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
    {$this->storeOrUpdate($request);

        return redirect()->route('website.branch.index')->with('success','Branch Create Success');
//        try {
//
//        } catch (\Throwable $th) {
//            //return redirect()->back()->with('error',$th->getMessage());
//        }
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
        try {
            $data['branch'] = Branchmodel::find($id);
            return view('backend/page/branch/edit', $data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
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
        try {
            $this->storeOrUpdate($request, $id);

            return redirect()->route('website.branch.index')->with('success','Branch Update Success');
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
            $buyer = Branchmodel::find($id);

            if(file_exists($buyer->image))
            {
                unlink($buyer->image);
            }
            $buyer->delete();

            return redirect()->back()->with('success','Branch Deleted Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate($request, $id = null)
    {
        try {
            $branch= Branchmodel::updateOrCreate([
                'id'                    =>$id,
            ],[
                'name'                  =>$request->name,
                'address'               =>$request->address,
                'contact'               =>$request->contact,
                'status'                =>$request->status ? 1: 0,
            ]);

            $this->uploadFileWithResize($request->image, $branch, 'image', 'images/branch', 400, 400);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
