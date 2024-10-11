<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $reports= Reports::all();
        return view('report.index', compact('reports'));
    }
}
