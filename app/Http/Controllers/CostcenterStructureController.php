<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostcenterStructureRequest;
use App\Models\CostcenterStructure;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CostcenterStructureController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        return view('costcenterStructure', $data);
    }

    public function datatables(Request $request)
    {
        $query    = CostcenterStructure::get();
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
        $costcenter = CostcenterStructure::create([
            'directorat' => $request->directorat,
            'departement' => $request->departement,
            'pic' => $request->pic,
            'company' => $request->company,
            'created_by' => Auth::user()->username,
            'updated_by' => Auth::user()->username,
            'status' => $request->status,
            'kadir' => $request->kadir,
            'unit_kerja' => $request->unit_kerja,
            'year' => $request->year,
        ]);

        $response = responseSuccess(trans('message.read-success'),$costcenter);
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($costcenter)
    {

        $query   = CostcenterStructure::find($costcenter);
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
        $query   = CostcenterStructure::find($id);
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
    public function update($id, CostcenterStructureRequest $request)
    {
          $data = $this->findDataWhere(CostcenterStructure::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'directorat' => $request->directorat,
                    'departement' => $request->departement,
                    'pic' => $request->pic,
                    'company' => $request->company,
                    'status' => $request->status,
                    'kadir' => $request->kadir,
                    'unit_kerja' => $request->unit_kerja,
                    'year' => $request->year,
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

        CostcenterStructure::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
