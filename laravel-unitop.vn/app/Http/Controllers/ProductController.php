<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
        //return "Thông tin sản phẩm có id: ".$id;
        return view('product.show');
    }

    function create(){
        return view('product.create');
    }

    function update($id){
        return "update san pham co id: ".$id;
    }
}
