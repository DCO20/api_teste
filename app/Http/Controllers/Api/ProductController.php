<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Api\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }
   
    public function store(Request $request)
    {
        Product::create($request->all());
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $device = Product::findOrFail($id);
        $device->update($request->all());
    }

    public function destroy($id)
    {
        $device = Product::findOrFail($id);
        $device->delete();
    }
}
