<?php

namespace App\Http\Controllers;

use App\Models\Package;

use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('packages.index', ['packages' => $packages]);
    }

    // public function book()
    // {
    //     $packages = Package::all();

    //     return view('packages.book', ['packages' => $packages]);
    // }

    public function create()
    {
        return view('packages.create'); 
    }

    public function store()
    {
        request()->validate([
            'packageName' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Package::create([
            'packageName' => request('packageName'),
            'description' => request('description'),
            'price' => request('price')
        ]);
        return redirect('/packages');
    }

    public function edit(Package $package)
    {
        return view('packages.edit', ['package' => $package]);
    }

    public function update(Package $package)
    {
        request()->validate([
            'packageName' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $package->update([
            'packageName' => request('packageName'),
            'description' => request('description'),
            'price' => request('price'),
        ]);
        return redirect('/packages');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect('/packages');
    }


    
}
 