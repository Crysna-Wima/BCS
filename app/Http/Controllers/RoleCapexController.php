<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleCapexRequest;
use App\Models\RoleCapex;
use App\Models\Company;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RoleCapexController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        $data['company'] = Company::select('id', 'company', 'description')->get();
        return view('roleCapex', $data);
    }

    public function datatables(Request $request)
    {
        $query    = RoleCapex::get();
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
        $costcenter = RoleCapex::create([
            'nopeg' => $request->nopeg,
            'acc' => $request->acc,
            'company' => $request->company,
            'ka' => $request->ka,
            'year' => $request->year,
            'status' => $request->status,
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
    public function show($roleCapex)
    {

        $query   = RoleCapex::find($roleCapex);
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
        $query   = RoleCapex::find($id);
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
    public function update($id, RoleCapexRequest $request)
    {
          $data = $this->findDataWhere(RoleCapex::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'nopeg' => $request->nopeg,
                    'acc' => $request->acc,
                    'company' => $request->company,
                    'ka' => $request->ka,
                    'status' => $request->status,
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

        RoleCapex::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
