<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = Agenda::all();
        return view('agenda', compact('data'));
    }
}
