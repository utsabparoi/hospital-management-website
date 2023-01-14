<?php

namespace App\Http\Controllers\backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Models\backend\Partner;

class PartnerController extends Controller
{
    use FileSaver;

    /**
     * =============================================
     * INDEX METHOD
     * =============================================
     **/
    public function index()
    {
        $data['partner']  = Partner::latest()->paginate(20);
        $data['table']   = Partner::getTableName();
        return view('backend/page/partner/index', $data);
    }

    /**
     * =============================================
     * Created Method
     * =============================================
     **/
    public function create()
    {
        try {
            return view('backend/page/partner/create');
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

        $this->storeOrUpdate($request);

        return redirect()->route('partners.index')->with('success','Added Success');
        // try {
        //     $this->storeOrUpdate($request);

        //     return redirect()->route('partners.index')->with('success','Added Success');

        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error',$th->getMessage());

        // }
    }

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
        $partner  = Partner::find($id);
        return view('backend/page/partner/edit', compact('partner'));
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
            $this->storeOrUpdate($request,$id);
            return redirect()->route('partners.index')->with('success','Updated Success');
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
        $data = Partner::find($id);

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
            $partner = Partner::updateOrCreate([
                'id'            => $id,
            ],[
                'name'          => $request->name,
                'description'   => $request->description,
                'status'        => $request->status ? 1 : 0,
            ]);
            $this->uploadFileWithResize($request->image, $partner, 'image', 'images/partner', 170, 80);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
