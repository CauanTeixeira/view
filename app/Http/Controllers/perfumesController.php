<?php

namespace App\Http\Controllers;

use App\Models\Perfumes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class perfumesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $perfumes = DB::table('perfumes')
        ->select('*')
        ->get();
        return view('index', ['perfumes' => $perfumes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $perfume = new Perfumes;
        $perfume->name = $request->name;
        $perfume->valor = $request->valor;
        $perfume->save();

       return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfumes $perfumes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perfumes $perfumes, Request $request)
    {
        
        // $perfumes = DB::table('perfumes')
        // ->select('*')
        // ->where('id' , '=', '$request->id')
        // ->get();
        dd($request);
        // return view('editar', ['perfumes' => $perfumes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perfumes $perfumes)
    {
        $perfume = new Perfumes;
        $perfume->name = $request->name;
        $perfume->valor = $request->valor;
        $perfume->save();

       return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfumes $perfumes)
    {
        //
    }
}
