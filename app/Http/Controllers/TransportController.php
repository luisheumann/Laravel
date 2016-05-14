<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Brand;
use App\Models\Transport;
use App\Models\Modelo;
use App\User;

class TransportController extends Controller
{

    
      public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function index()
	{
		$Transports = Transport::first();
		$Modelos = Modelo::first();
	 	return view('transportes.index', ['Transports' => $Transports, 'Modelos' => $Modelos]);
	}
    
    
     public function modelos()
	{
		
		$Modelos = Modelo::get();
	 	return view('transportes.modelos', ['Modelos' => $Modelos]);
	}

    



}
