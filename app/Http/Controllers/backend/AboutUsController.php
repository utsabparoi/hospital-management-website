<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\FileSaver;
use Intervention\Image\Facades\Image;
use App\Models\backend\AboutUs;

class AboutUsController extends Controller
{
    use FileSaver;

    /**
     * =============================================
     * INDEX METHOD
     * =============================================
     **/
    public function index()
    {
        $data['about_us']  = AboutUs::latest()->paginate(20);
        $data['table']   = AboutUs::getTableName();
        return view('backend/page/about_us/index', $data);
    }

    /**
     * =============================================
     * Created Method
     * =============================================
     **/


    public function create()
    {
        try {
            return view('backend/page/about_us/create');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * =============================================
     * Store a newly created resource in storage.
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

            return redirect()->route('about_us.index')->with('success','Added Success');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());

        }
    }

    /**
     * =============================================
     * SHOW METHOD
     * =============================================
     **/
    public function show($id)
    {

    }

    /**
     * =============================================
     * EDIT METHOD
     * =============================================
     **/
    public function edit($id)
    {
        $about_us  = AboutUs::find($id);
        return view('backend/page/about_us/edit', compact('about_us'));
    }

    /**
     * =============================================
     * UPDATE METHOD
     * =============================================
     **/
    public function update(Request $request, $id)
    {
        try {
            $this->storeOrUpdate($request,$id);
            return redirect()->route('about_us.index')->with('success','Updated Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /**
     * =============================================
     * DESTROY/DELETE METHOD
     * =============================================
     **/
    public function destroy($id)
    {
        $data = AboutUs::find($id);

        if(file_exists($data->image))
        {
            unlink($data->image);
        }
        $data->delete();

        return redirect()->back()->withMessage('Delete success');
    }

    private function storeOrUpdate($request, $id = null)
    {

        try {
            $about_us = AboutUs::updateOrCreate([
                'id'             => $id,
            ],[
                'title'          => $request->title,
                'description'    => $request->description,
                'status'         => $request->status ? 1 : 0,
            ]);
            $this->uploadFileWithResize($request->image, $about_us, 'image', 'images/about_us', 450, 300);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
