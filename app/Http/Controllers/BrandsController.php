<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
	public function index()
	{
		$brands = Brands::query()->orderBy('name', 'asc')->get();
		return view('brands.index')->with('brands', $brands);
	}
	
	public function create()
	{
		return view('brands.create');
	}
	
	public function store(Request $request)
	{
		$name = $request->input('name');
		$brand = new Brands();
		$brand->name = $name;
		
		$brand->save();
		return redirect('/marcas');
	}
}