<?php

namespace App\Http\Controllers;
use App\Models\Menu;


class DashboardController extends Controller
{
    public function index()
    {
        // $query = new Company();
        $data['menus'] = $this->getDashboardMenu();
        $data['menu']  = Menu::select('id', 'name')->get();
        return view('dashboard', $data);
    }
}
