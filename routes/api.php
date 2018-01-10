<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller {
    public function getProducts()
    {
        $products = DB::select("select * from products");
        return response()->json($products);
    }
}