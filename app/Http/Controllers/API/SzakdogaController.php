<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\szakdoga;

class SzakdogaController extends Controller
{
    public function index(){
        return response()->json(szakdoga::all());
    }

    public function store(Request $request)
    {
        $szakdogak = new szakdoga();
        $szakdogak->szakdoga_nev = $request->szakdoga_nev;
        $szakdogak->tagokneve  = $request->tagokneve;
        $szakdogak->githublink  = $request->githublink;
        $szakdogak->oldallink  = $request->oldallink;
        $szakdogak->save();
    }

    public function update(Request $request, $id)
    {
        $szakdogak = szakdoga::findOrFail($id);
        
        $szakdogak->szakdoga_nev = $request->get('szakdoga_nev');
        $szakdogak->tagokneve  = $request->get('tagokneve');
        $szakdogak->githublink  = $request->get('githublink');
        $szakdogak->oldallink  = $request->get('oldallink');
        $szakdogak->save();
        return response()->json($szakdogak);
    }

    public function destroy($id)
    {
        $szakdogak = szakdoga::findOrFail($id);
        $szakdogak->delete();
    }

}