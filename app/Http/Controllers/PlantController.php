<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantRequest;
use App\Models\Plant;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        return view('plant', $data);
    }
    
    public function datatables(Request $request)
    {
        $query    = Plant::get();
        $data     = DataTables::of($query)->make(true);
        $response = $data->getData(true);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }
    
    public function store(Request $request)
    {
        $costcenter = Plant::create([
            'plant' => $request->plant,
            'description' => $request->description,
            'category' => $request->category,
            'type' => $request->type,
            // 'created_by' => Auth::user()->username,
            // 'updated_by' => Auth::user()->username,
            'parenth1' => $request->parenth1,
            'cc1' => $request->cc1,
            'costcenter' => $request->costcenter,
            'sender_bag' => $request->senderbag,
            'parenth2' => $request->parenth2,
            'status' => $request->status,
            'cc2' => $request->cc2,
        ]);

        $response = responseSuccess(trans('message.read-success'),$plant);
        return response()->json($response,200);
    }
    
    public function show($plant)
    {

        $query   = Plant::find($plant);
        $response = responseSuccess(trans('message.read-success'),$query);
        return response()->json($response,200);
    }
    
    public function edit($id)
    {
        $query   = Plant::find($id);
        $response = responseSuccess(trans("messages.read-success"), $query);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
        //
    }
    
    public function update($id, PlantRequest $request)
    {
          $data = $this->findDataWhere(Plant::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'plant' => $request->plant,
                    'description' => $request->description,
                    'category' => $request->category,
                    'type' => $request->type,
                    'parenth1' => $request->parenth1,
                    'cc1' => $request->cc1,
                    'costcenter' => $request->costcenter,
                    'sender_bag' => $request->senderbag,
                    'parenth2' => $request->parenth2,
                    'status' => $request->status,
                    'cc2' => $request->cc2,
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

        Plant::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
