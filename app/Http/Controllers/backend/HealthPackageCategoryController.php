<?php

namespace App\Http\Controllers\backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\HealthPackageCategory;
use App\Models\backend\HealthPackageFacility;

class HealthPackageCategoryController extends Controller
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
            $data['pkg_category'] = HealthPackageCategory::orderBy('id','desc')->paginate(20);
            $data['table']      = HealthPackageCategory::getTableName();
            return view('backend/page/health-pkg-category.index',$data);
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
            return view('backend/page/health-pkg-category.create');
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
        try {
            $this->storeOrUpdate($request);

            return redirect()->route('health_package_category.index')->with('success','Package Category Create Success');
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
        $data['pkg_category']  = HealthPackageCategory::find($id);
        $data['pkg_category_name'] = HealthPackageCategory::where('id', '=', $id)->first()->name;
        $data['pkg_facility_name'] = HealthPackageFacility::where('pkg_category', '=', $data['pkg_category_name'])->get();
        return view('backend/page/health-pkg-category/edit', $data);
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

            return redirect()->route('health_package_category.index')->with('success','Package Category Update Success');
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
        $data['pkg_category'] = HealthPackageCategory::find($id);
        $data['pkg_category_name'] = HealthPackageCategory::where('id', '=', $id)->first()->name;
        $data['pkg_facility_name'] = HealthPackageFacility::where('pkg_category', '=', $data['pkg_category_name'])->delete();
        $data['pkg_category']->delete();
        return redirect()->back()->withMessage('Success');
    }

    /*
     |--------------------------------------------------------------------------
     | STORE OR UPDATE  METHOD
     |--------------------------------------------------------------------------
    */
    public function storeOrUpdate($request, $id = null)
    {
        // HealthPackageFacility::where('pkg_category', '=', 'Home Health Screening')->update(['pkg_category' => 'test']);
        $data['pkg_category_name'] = HealthPackageCategory::where('id', '=', $id)->first()->name;
        $data['pkg_facility_name'] = HealthPackageFacility::where('pkg_category', '=', $data['pkg_category_name'])->update(['pkg_category' => $request->name]);
        return HealthPackageCategory::updateOrCreate([
            'id'    => $id,
        ], [
            'name'  => $request->name,
            'description'   => $request->description,
            'status'                =>$request->status ? 1: 0,
        ]);
    }
}
