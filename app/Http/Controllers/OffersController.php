<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $offer = Offers::latest();
        if (request('name')) {
            $offer->where('name', 'like', request('name'));
        }
        if (request('duration')) {
            $offer->where('duration', request('duration'));
        }
        if (request('competences')) {
            $offer->where('competences', 'like', request('competences'));
        }
        if (request('salary')) {
            $offer->where('salary', '>', request('salary'));
        }
        if (request('date')) {
            $offer->whereMonth('date', request('date'));
        }
        $offer->OrderByDesc('created_at');
        return $offer->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Offers::create($request->all())){
            return response()->json([
                'success' => 'Offre crée avec succés'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offer)
    {
        return $offer;
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offers $offer)
    {
        if($offer->update($request->all())){
            return response()->json([
                'success' => 'Offre modifié avec succés'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Offers  $offers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offer)
    {
        if ($offer->delete()) {
            return response()->json([
                'success' => 'Offre supprimé avec succés'
            ], 200);
        }
        
    }
}
