<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;
use App\Models\User;

class AdminController extends Controller
{
    

    public function store(LoginRequest $request): RedirectResponse{
        $request->authenticate();
        $request->session()->regenerate();
        if(auth()->user()->isAdmin()){
            return redirect()->route('admin.index');
        }
        return redirect()->intended(route('dashboard', absolute: false));
    }

    
    public function index(){
        $reports= Report::all();

        return view('admin.index', compact('reports'));
    }
}
