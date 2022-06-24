<?php

namespace App\Http\Controllers;

use App\Http\Requests\GlAccountRequest;
use App\Models\Gl_account;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GlAccountController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        return view('glaccount', $data);
    }

    public function datatables(Request $request)
    {
        $query    = Gl_account::get();
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
        $glaccount = Gl_account::create([
            'gl_account' => $request->gl_account,
            'description' => $request->description,
            'account_type' => $request->account_type,
            'parenth1' => $request->parenth1,
            'parenth2' => $request->parenth2,
            'parenth3' => $request->parenth3,
            'status' => $request->status,
            'costcenter_allocation' => $request->costcenter_allocation,
            'parenth4' => $request->parenth4,
        ]);

        $response = responseSuccess(trans('message.read-success'),$glaccount);
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($glaccount)
    {

        $query   = Gl_account::find($glaccount);
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
        $query   = Gl_account::find($id);
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
    public function update($id, GlAccountRequest $request)
    {
          $data = $this->findDataWhere(Gl_account::class, ['id' => $id]);

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'gl_account' => $request->gl_account,
                    'description' => $request->description,
                    'account_type' => $request->account_type,
                    'parenth1' => $request->parenth1,
                    'parenth2' => $request->parenth2,
                    'parenth3' => $request->parenth3,
                    'status' => $request->status,
                    'costcenter_allocation' => $request->costcenter_allocation,
                    'parenth4' => $request->parenth4,
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

        Gl_account::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
