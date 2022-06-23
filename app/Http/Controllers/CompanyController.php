<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Routes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        $parenth1 = Company::whereNull('parenth1')->get();
        $parenth2 = Company::whereNotNull('parenth1')->whereNull('parenth2')->get();
        $data['parenth1'] = $parenth1;
        $data['parenth2'] = $parenth2;

        return view('company', $data);
    }

    public function datatables(Request $request)
    {
        $query    = Company::get();
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
        if ($request->file('logo')) {
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/img/logo'), $filename);
        }

        $company = Company::create([
            'company' => $request->company,
            'description' => $request->description,
            'parenth1' => $request->parenth1,
            'parenth2' => $request->parenth2,
            'status' => $request->status,
            'short_description' => $request->short_description,
            'short_desc_inventory' => $request->short_desc_inventory,
            'dirut_name' => $request->dirut_name,
            'logo' => $filename,
        ]);

        $response = responseSuccess(trans('message.read-success'),$company);
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($company)
    {

        $query   = Company::find($company);
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
        $query   = Company::find($id);
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
    public function update($id, CompanyRequest $request)
    {
          $data = $this->findDataWhere(Company::class, ['id' => $id]);
            if ($request->file('logo')) {
                $file= $request->file('logo');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('assets/img/logo'), $filename);
            }

        //   dd($data);exit();
          DB::beginTransaction();
          try {
              $data->update([
                    'company' => $request->company,
                    'description' => $request->description,
                    'parenth1' => $request->parenth1,
                    'parenth2' => $request->parenth2,
                    'status' => $request->status,
                    'short_description' => $request->short_description,
                    'short_desc_inventory' => $request->short_desc_inventory,
                    'dirut_name' => $request->dirut_name,
                    'logo' => $filename,
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

        Company::destroy($id);
        $response = responseSuccess(trans('message.delete-success'));
        return response()->json($response,200);
    }
}
