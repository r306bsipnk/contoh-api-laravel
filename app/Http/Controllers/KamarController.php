<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamarController extends Controller
{ 
    public function index(Request $request){
        $limit = $request->input('limit', 10);
        $kamar = Kamar::paginate($limit);
        return response()->json($kamar);
    }

    public function destroy($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();
        return response()->json([
            'message' => 'Data Kamar berhasil dihapus'
        ]);
    }

    public function show($id)
    {
        $kamar = Kamar::find($id);
        return response()->json($kamar);
    }


 
}
