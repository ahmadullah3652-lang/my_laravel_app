<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blade.php');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.blade.php');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "دلته به معلومات ذخيره شي";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('report.blade.php');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('about.blade.php');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "دلته به معلومات نوي شي";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "دلته به معلومات حذف شي";
    }
}
