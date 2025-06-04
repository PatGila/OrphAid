<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrphanageController extends Controller
{
    public function index()
    {
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

    public function donatePage($orph_id)
    {
        $orphanage = \DB::table('orphanage')->where('id', $orph_id)->first();
        if (!$orphanage) {
            abort(404);
        }
        return view('donate', compact('orphanage'));
    }

    public function donate($orph_id)
    {
        $user = session('user');
        if (!$user) {
            return redirect('/')->withErrors(['login' => 'You must be logged in to donate.']);
        }

        DB::table('donate')->insert([
            'user_id' => is_array($user) ? $user['id'] : $user->id,
            'orph_id' => $orph_id,
            'date' => now(),
        ]);

        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}