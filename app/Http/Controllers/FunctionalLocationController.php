<?php

namespace App\Http\Controllers;

use App\Http\Requests\FunctionalLocationRequest;
use App\Models\CostcenterStructure;
use App\Models\Company;
use App\Models\FunctionalLocation;
use App\Models\Plant;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FunctionalLocationController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        $data['company'] = Company::select('id', 'company', 'description')->get();
        $data['costcenter'] = CostcenterStructure::select('id', 'directorat')->get();
        $data['plant'] = Plant::select('id', 'plant')->get();
        return view('functionalLocation', $data);
    }

    public function datatables(Request $request)
    {
        $query    = FunctionalLocation::get();
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
        $functionallocation = FunctionalLocation::create([
            'functional_location' => $request->functional_location,
            'description' => $request->description,
            'costcenter' => $request->costcenter,
            'area' => $request->area,
            'company' => $request->company,
            'plant' => $request->plant,
            'parenth1' => $request->parenth1,
            'status' => $request->status,
        ]);

        $response = responseSuccess(trans('message.read-success'),$functionallocation);
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($functionallocation)
    {

        $query   = FunctionalLocation::find($functionallocation);
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
        $query   = FunctionalLocation::find($id);
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
    public function update($id, FunctionalLocationRequest $request)
    {
          $data = $this->findDataWhere(FunctionalLocation::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'functional_location' => $request->functional_location,
                    'description' => $request->description,
                    'costcenter' => $request->costcenter,
                    'area' => $request->area,
                    'company' => $request->company,
                    'plant' => $request->plant,
                    'parenth1' => $request->parenth1,
                    'status' => $request->status,
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

        FunctionalLocation::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
