<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class vendedorController extends AppBaseController
{

    public function index(Request $request)    {
        return view('vendedores.index');
    }
}
