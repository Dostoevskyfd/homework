<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(){
        $reports= Report::where('users_id', Auth::user()->id)
        ->get();
        return view('report.index', compact('reports'));
    }

    public function destroy(Report $report){
        $report -> delete();
        return redirect()->back();
    }
    public function create(){
      return view('report.create');
    }

    public function store(Request $request): RedirectResponse{
        $request->validate([
          'number' => ['required', 'string', 'max:255'],
          'description' =>['required', 'string'],

        ]);
        Report::create([
          'number' => $request->number,
          'description'=>$request->description,
          'statuses_id'=>1,
          'users_id'=> Auth::user()->id,
        ]);

        return redirect()->route('dashboard');
        
      }

      
      public function show(Report $report){
        return view('report.show', compact('report'));
        
      }  
  
    public function update(Request $request, Report $report){
        $data = $request -> validate([
          'number' => 'integer',
          'description' => 'string',
        ]);
      
        $report -> update($data);
        return redirect()->back();
        
      }
  

}
