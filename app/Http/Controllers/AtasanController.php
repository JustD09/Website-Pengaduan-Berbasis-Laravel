<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class AtasanController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $atasan = Laporan::orderBy('created_at', 'DESC')->get();
  
        return view('atasan.index', compact('atasan'));
    }

}
