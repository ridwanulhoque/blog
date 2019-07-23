<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view('company.add');
    }


    public function store(Request $request){

        $request->validate([
            'name' 			=> 'required|max:30|min:2',
            'email' 		=> 'required|unique:company',
            'website' 		=> 'required|min:6',

        ]);

        $company 			  = new Company();
        $company->name 		  = $request->name;
        $company->email 	  = $request->email;
        $company->website     = $request->website;
        $company->save();

        return redirect('/')->with('message', 'New Company Created.');

    }
}
