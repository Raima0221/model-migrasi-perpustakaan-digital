<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    $subjudul = 'Katalog Lengkap';
    $contoh = 'Test Aja';
    return view('products.index',compact(['subjudul','contoh']));
    }
}
