<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;

// use Response

class TermController extends Controller
{
    
    
    public function create(Request $request){

        $phone = $request->input('phone', null);
        if (is_null($phone)) {
            return response()->json(['result'=>'error','text'=>'empty phone']);
        }
        $term = Term::where('phone', $phone)->first();
        if ($term) {
            return response()->json(['result'=>'error','text'=>'phone already in system']);
        }
        $newTerm = new Term;
        $newTerm->phone = $phone;
        $newTerm->save();

        return response()->json(['result'=>'sucess']);
    }

    public function table()
    {
        $terms = Term::all();
        return view('terms',[
            'terms' => $terms
        ]);
    }
}
