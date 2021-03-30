<?php

namespace App\Http\Controllers;

use App\Models\Nomination;
use Illuminate\Http\Request;

class NominationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Nomination::OrderByDesc('created_at')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Nomination::create($request->all())){
            return response()->json([
                'success' => 'Nomination crée avec succés'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function show(Nomination $nomination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomination $nomination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nomination  $nomination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomination $nomination)
    {
        if ($nomination->delete()) {
            return response()->json([
                'success' => 'Nomination supprimé avec succés'
            ], 200);
        }
    }
}
