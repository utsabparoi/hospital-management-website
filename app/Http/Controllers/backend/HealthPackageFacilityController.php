<?php

namespace App\Http\Controllers\backend;

use App\Traits\FileSaver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\HealthPackageFacility;
use App\Models\backend\HealthPackageCategory;

class HealthPackageFacilityController extends Controller
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
            $data['pkg_facility'] = HealthPackageFacility::orderBy('id','desc')->paginate(20);
            $data['table']      = HealthPackageFacility::getTableName();
            return view('backend/page/health-pkg-facility.index',$data);
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
        $data['pkg_category'] = HealthPackageCategory::orderBy('id','desc')->get();
        try {
            return view('backend/page/health-pkg-facility.create', $data);
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
        $this->storeOrUpdate($request);

        return redirect()->route('health_package_facility.index')->with('success','Package Facility Create Success');
        // try {
        //     $this->storeOrUpdate($request);

        //     return redirect()->route('health_package_facility.index')->with('success','Package Facility Create Success');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error',$th->getMessage());
        // }
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
        $data['pkg_facility']  = HealthPackageFacility::find($id);
        $data['pkg_category'] = HealthPackageCategory::orderBy('id','desc')->get();
        return view('backend/page/health-pkg-facility/edit', $data);
    }

    /**
     * =============================================
     * Update Method
     * =============================================
     **/
    public function update(Request $request, $id)
    {
        $this->storeOrUpdate($request, $id);

        return redirect()->route('health_package_facility.index')->with('success','Package Facility Update Success');
        // try {
        //     $this->storeOrUpdate($request, $id);

        //     return redirect()->route('health_package_facility.index')->with('success','Package Facility Update Success');
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error',$th->getMessage());
        // }
    }

    /**
     * =============================================
     * Destroy Method
     * =============================================
     **/
    public function destroy($id)
    {
        $data = HealthPackageFacility::find($id);
        $data->delete();
        return redirect()->back()->withMessage('Success');
    }

    /*
     |--------------------------------------------------------------------------
     | STORE OR UPDATE  METHOD
     |--------------------------------------------------------------------------
    */
    public function storeOrUpdate($request, $id = null)
    {
        try {

            return HealthPackageFacility::updateOrCreate([
                'id'    => $id,
            ], [
                'name'  => $request->name,
                'pkg_category'  => $request->pkg_category,
                'status'=> $request->status ? 1: 0,
            ]);
            dd('test');
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}
