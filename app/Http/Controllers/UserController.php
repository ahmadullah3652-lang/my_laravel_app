<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
       return view('users.index');
        
    }

   
    public function create()
    {
        return view('users.create');
    }

    
    public function store(Request $request)
    {
        return "دلته به معلومات ذخيره شي";
    }

    
    public function show(string $id)
    {
        return view('users.show');
    }

  
    public function edit(string $id)
    {
        return view('users.edit');
    }


    public function update(Request $request, string $id)
    {
        return "دلته به معلومات نوي شي";
    }

   
    public function destroy(string $id)
    {
        return "دلته به معلومات حذف شي";
    }
}
