<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddTypeProductController extends Controller
{
    public function addtypeProduct()
    {
        return view('admin.add.addTypeproduct');
    }
}
