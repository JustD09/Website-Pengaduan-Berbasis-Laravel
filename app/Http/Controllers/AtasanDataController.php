<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infrastruktur;

class AtasanDataController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $atasanData = Infrastruktur::orderBy('created_at', 'DESC')->get();
  
        return view('atasanData.index', compact('atasanData'));
    }
  
    /**
     * Show the form for creating a new resource.
     */

}
