<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::latest();
        if(request('name')) {
            $company->where('Company_Name', 'like', request('name'));
        }
        // if(request('city')) {
        //     $company->where('Company_Name', 'like', request('name'));
        // }
        if(request('sector')) {
            $company->where('Company_Sector', 'like', request('sector'));
        }
        if(request('nbrStudents')) {
            $company->where('Company_NBStudents', '>', request('nbrStudents'));
        }
        if(request('trust')) {
            $company->where('Company_TutorConfidence', '>', request('trust'));
        }
        return $company->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Company::create($request->all())){
            return response()->json([
                'success' => 'Company crée avec succés'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return $company;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        if($company->update($request->all())){
            return response()->json([
                'success' => 'Company modifié avec succés'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
