<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\FileSaver;
use Intervention\Image\Facades\Image;
use App\Models\backend\ClientReview;

class ClientReviewController extends Controller
{
    use FileSaver;

    /*
     |--------------------------------------------------------------------------
     | INDEX METHOD
     |--------------------------------------------------------------------------
    */
    public function index()
    {
        $data['reviews'] = ClientReview::paginate(30);
        $data['table']   = ClientReview::getTableName();

        return view('backend.page.clients-review.index', $data);
    }

    /*
     |--------------------------------------------------------------------------
     | CREATE METHOD
     |--------------------------------------------------------------------------
    */
    public function create()
    {
        try {
            return view('backend.page.clients-review.create');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /*
     |--------------------------------------------------------------------------
     | STORE METHOD
     |--------------------------------------------------------------------------
    */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image'          => 'required',
        ]);

        $this->storeOrUpdate($request);

        return redirect()->route('clients_reviews.index')->with('success', "Review Create Success");

        // try {

        //     $this->storeOrUpdate($request);

        //     return redirect()->route('clients_reviews.index')->with('success', "Review Create Success");
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', $th->getMessage());
        // }
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

    /*
     |--------------------------------------------------------------------------
     | EDIT METHOD
     |--------------------------------------------------------------------------
    */
    public function edit($id)
    {
        try {

            $data['review'] = ClientReview::find($id);

            return view('backend.page.clients-review.edit',$data);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /*
     |--------------------------------------------------------------------------
     | UPDATE METHOD
     |--------------------------------------------------------------------------
    */
    public function update($id, Request $request)
    {
        try {
            $this->storeOrUpdate($request, $id);
            return redirect()->route('clients_reviews.index')->with('success',"Review Create Success");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    /*
     |--------------------------------------------------------------------------
     | DELETE/DESTORY METHOD
     |--------------------------------------------------------------------------
    */
    public function destroy($id)
    {
        $data = ClientReview::find($id);
        try {
            if(file_exists($data->image)){
                unlink($data->image);
            }
            $data->delete();

            return redirect()->back()->with('success',"Review Delete Success");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    private function storeOrUpdate($request, $id = null)
    {

        try {
            $reviews = ClientReview::updateOrCreate([
                'id'            => $id,
            ],[
                'name'          => $request->name,
                'age'           => $request->age,
                'designation'   => $request->designation,
                'review'        => $request->review,
                'status'        => $request->status ? 1 : 0,
            ]);
            $this->uploadFileWithResize($request->image, $reviews, 'image', 'images/client_review', 350, 350);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
