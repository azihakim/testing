<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengiriman = Pengiriman::all();
        return view('dashboard.dashboard', compact('pengiriman'));
    }
}
