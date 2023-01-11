<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\SocialLink;


class SocialLinkController extends Controller
{
    /**
     * =============================================
     * INDEX METHOD
     * =============================================
     **/
    public function index()
    {
        $data['links']  = SocialLink::latest()->paginate(20);
        $data['table']  = SocialLink::getTableName();

        return view('backend/page/social_links/index', $data);
    }

    /**
     * =============================================
     * Created Method
     * =============================================
     **/
    public function create()
    {

        return view('backend/page/social_links/create');
    }

    /**
     * =============================================
     * Store a newly created resource in storage.
     * =============================================
     **/
    public function store(Request $request)
    {
        try {
            $this->storeOrUpdate($request);
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->route('social_links.index')->withMessage('Success');
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
     * =============================================
     * EDIT METHOD
     * =============================================
     **/
    public function edit($id)
    {
        $social_link  = SocialLink::find($id);
        return view('backend/page/social_links/edit', compact('social_link'));
    }

    /**
     * =============================================
     * UPDATE METHOD
     * =============================================
     **/
    public function update(Request $request, $id)
    {
        try {
            $this->storeOrUpdate($request, $id);
        } catch (\Throwable $th) {
            throw $th;
        }
        return redirect()->route('social_links.index')->withMessage('Success');
    }

    /**
     * =============================================
     * DESTROY/DELETE METHOD
     * =============================================
     **/
    public function destroy($id)
    {
        $data = SocialLink::find($id);
        $data->delete();
        return redirect()->back()->withMessage('Success');
    }



    public function storeOrUpdate($request, $id = null)
    {
        return SocialLink::updateOrCreate([
            'id'    => $id,
        ], [
            'name'  => $request->name,
            'url'   => $request->url,
            'icon'  => $request->icon,
        ]);
    }
}
