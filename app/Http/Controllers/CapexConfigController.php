<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapexConfigRequest;
use App\Models\CapexConfig;
use App\Models\Company;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CapexConfigController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        $data['company'] = Company::select('id', 'company', 'description')->get();
        return view('CapexConfig', $data);
    }

    public function datatables(Request $request)
    {
        $query    = CapexConfig::get();
        $data     = DataTables::of($query)->make(true);
        $response = $data->getData(true);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $capexconfig = CapexConfig::create([
            'status' => $request->status,
            'company' => $request->company,
            'description' => $request->description,
            'year' => $request->year,
            
            'create_by' => $request->create_by,
            'create_date' => $request->create_date,
            'update_by' => $request->update_by,
            // 'created_by' => Auth::user()->username,
            // 'updated_by' => Auth::user()->username,
            'update_date' => $request->update_date,
            'type' => $request->type,
        ]);

        $response = responseSuccess(trans('message.read-success'),$capexconfig);
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($capexconfig)
    {

        $query   = CapexConfig::find($capexconfig);
        $response = responseSuccess(trans('message.read-success'),$query);
        return response()->json($response,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query   = CapexConfig::find($id);
        $response = responseSuccess(trans("messages.read-success"), $query);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, CapexConfigRequest $request)
    {
          $data = $this->findDataWhere(CapexConfig::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
            'status' => $request->status,
            'company' => $request->company,
            'description' => $request->description,
            'year' => $request->year,
            
            'create_by' => $request->create_by,
            'create_date' => $request->create_date,
            'update_by' => $request->update_by,
            // 'created_by' => Auth::user()->username,
            // 'updated_by' => Auth::user()->username,
            'update_date' => $request->update_date,
            'type' => $request->type,
                    
              ]);
              DB::commit();
              $response = responseSuccess(trans("messages.update-success"), $data);
              return response()->json($response, 200, [], JSON_PRETTY_PRINT);
          } catch (Exception $e) {
              DB::rollback();
              $response = responseFail(trans("messages.update-fail"), $e->getMessage());
              return response()->json($response, 500, [], JSON_PRETTY_PRINT);
            }

    }


    public function destroy($id)
    {

        CapexConfig::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
