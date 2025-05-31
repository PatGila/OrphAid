<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrphanageController extends Controller
{
    public function index()
    {
        // Use the correct table name: 'orphanage'
        $orphanages = DB::table('orphanage')->get();
        return view('orphanages', compact('orphanages'));
    }


    public function show($id)
    {
        $orphanage = \DB::table('orphanage')->where('id', $id)->first();
        if (!$orphanage) {
            abort(404);
        }
        return view('orphanage-detail', compact('orphanage'));
    }
}