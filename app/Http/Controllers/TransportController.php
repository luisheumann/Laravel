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


    public function index()
	{
		$Transports = Transport::first();
		$Modelos = Modelo::first();
	 	return view('transportes.index', ['Transports' => $Transports, 'Modelos' => $Modelos]);
	}



}
