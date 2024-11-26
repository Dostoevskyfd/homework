<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

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
}
