<?php

namespace App\Http\Controllers\backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\backend\Slider;

class SliderController extends Controller
{
    use FileSaver;

    /**
     * =============================================
     * INDEX METHOD
     * =============================================
     **/
    public function index()
    {
        $data['slider']  = Slider::latest()->paginate(20);
        // $data['table']   = Slider::getTableName();
        return view('backend/page/slider/index', $data);
    }

    /**
     * =============================================
     * Created Method
     * =============================================
     **/


    public function create()
    {
        try {
            return view('backend/page/slider/create');
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

            return redirect()->route('sliders.index')->with('success','Added Success');

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
        $slider  = Slider::find($id);
        return view('backend/page/slider/edit', compact('slider'));
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
            return redirect()->route('sliders.index')->with('success','Updated Success');
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
        $data = Slider::find($id);


        if(file_exists($data->image))
        {
            unlink($data->image);
        }
        $data->delete();

        return redirect()->back()->withMessage('Delete success');
    }

    private function storeOrUpdate($request, $id = null)
    {
        // dd($request->all());
        try {
            $slider = Slider::updateOrCreate([
                'id'            => $id,
            ],[
                'name'          => $request->name,
                'status'        => $request->status ? 1 : 0,
            ]);
            $this->uploadFileWithResize($request->image, $slider, 'image', 'images/slider', 1050, 480);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
