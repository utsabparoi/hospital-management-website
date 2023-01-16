<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\FileSaver;
use App\Models\backend\ArticleandNews;
use Intervention\Image\Facades\Image;

class ArticleandNewsController extends Controller
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
            $data['articles_news'] = ArticleandNews::orderBy('id','desc')->paginate(20);
            $data['table']      = ArticleandNews::getTableName();
            return view('backend/page/articleandnews.index',$data);
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
            return view('backend/page/articleandnews.create');
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
        try {
            $this->storeOrUpdate($request);

            return redirect()->route('articles_and_news.index')->with('success','Article & News Create Success');
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
     * =============================================
     * Edit Method
     * =============================================
     **/
    public function edit($id)
    {
        $articles_news  = ArticleandNews::find($id);
        return view('backend/page/articleandnews/edit', compact('articles_news'));
    }

    /**
     * =============================================
     * Update Method
     * =============================================
     **/
    public function update(Request $request, $id)
    {
        // dd($request->all());
        try {
            $this->storeOrUpdate($request, $id);

            return redirect()->route('articles_and_news.index')->with('success','Article & News Update Success');
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
        try {
            $articles_news = ArticleandNews::find($id);
            if(file_exists($articles_news->image)){
                unlink($articles_news->image);
            }
            $articles_news->delete();

            return redirect()->back()->with('success','Article & News Deleted Success');
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
        $articles_news = ArticleandNews::updateOrCreate([
            'id'                    =>$id,
        ],[
            'title'                 =>$request->title,
            'url'                   => $request->url,
            'icon'                  => $request->icon,
            'description'           =>$request->description,
            'date'                  =>$request->date,
            'status'                =>!empty($request->status) ? 1 : 0,
        ]);

        $this->uploadFileWithResize($request->image, $articles_news, 'image', 'images/articles_news', 550, 350);


       } catch (\Throwable $th) {
        throw $th;
       }
    }
}
