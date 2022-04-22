<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class skckController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$skck = DB::table('skck')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Admin.index',['skck' => $skck]);
 
    }
}

class skckcontroller extends Controller
{
    //SKCK Controller
}