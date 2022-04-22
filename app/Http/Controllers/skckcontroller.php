<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class skckcontroller extends Controller
{
    public function index()
    {
        $skck = DB::table('skck')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Admin.index',['skck' => $skck]);
    }
}
