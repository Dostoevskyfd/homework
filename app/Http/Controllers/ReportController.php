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

    public function destroy(Reports $report){
        $report -> delete();
        return redirect()->back();
    }

    public function store(Request $request, Reports $reports){
        $data = $request -> validate([
          'number' => 'integer',
          'description' => 'string',
        ]);
      
        $reports -> create($data);
        return redirect()->back();
        
      }

      public function show(Reports $reports){
        return view('report.show', compact('reports'));
        
      }  
  
    public function update(Request $request, Reports $reports){
        $data = $request -> validate([
          'number' => 'integer',
          'description' => 'string',
        ]);
      
        $reports -> update($data);
        return redirect()->back();
        
      }
  

}
