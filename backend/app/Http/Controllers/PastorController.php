<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastor;

class PastorController extends Controller
{
    //
    public function getPastor(){
        return response()->json(Pastor::all(), 200);
    }

    public function getPastorbyId($id) {
        $pastor = Pastor::find($id);
        if(is_null($pastor)){
            return response()->json(['message' => 'Pastor not found.'], 404);
        }
        return response()->json($pastor::find($id), 200);
    }

    public function addPastor(Request $request){
        $pastor = Pastor::create($request->all());
        return response($pastor, 201);
    }

    public function updatePastor(Request $request, $id) {
        $pastor = Pastor::find($id);
        if(is_null($pastor)){
            return response()->json(['message' => 'Pastor not found.'], 404);
        }
        $pastor -> update($request->all());
        return response($pastor, 200);
    }

    public function deletePastor(Request $request, $id){
        $pastor = Pastor::find($id);
        if(is_null($pastor)){
            return response()->json(['message' => 'Pastor not found.'], 404);
        }
        $pastor->delete();
        return response()->json(null, 204);
    }
}
