<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        dump(route('admin.products.index'));
        return 'Admin products list';
    }
    public function create(){
        return 'admin products create';
    }
}
