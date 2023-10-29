<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recommendation;


class RecommendationsController extends Controller
{
    public function recommend(){
        return view('Recommendation.recommend');
    }





    // My recommendation
    public function myrecommendation(Request $take)
    {
        $recommendations = Recommendation::all();

        request()->validate([
            'sex', 'age'
        ]);
        $sex = $take->sex;
        $age = $take->age;
        $recommendations = Recommendation::where('age', '=', $age)
                ->get();
            return view('recommendation.myrecommendation', ['recommendations' => $recommendations]);
    }





    public function index()
    {
        $recommendations = Recommendation::all();

        return view('recommendation.index', ['recommendations' => $recommendations]);
    }

    // Create a Recommendation
    public function create()
    {
        return view('recommendation.create'); 
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'sex' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'intensity' => 'required'  
            // recommendation	description	sex	weight	age	motive	
        ]);

        Recommendation::create([
            'name' => request('name'),
            'description' => request('description'),
            'sex' => request('sex'),
            'weight' => request('weight'),
            'age' => request('age'),
            'intensity' => request('intensity')
        ]);
        return redirect('/recommendations');
    }



    // Edit the Recommendation

    public function edit(Recommendation $recommendation)
    {
        return view('recommendation.edit', ['recommendation' => $recommendation]);
    }

    public function update(Recommendation $recommendation)
    {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'sex' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'intensity' => 'required'  
            // recommendation	description	sex	weight	age	motive	
        ]);

        $recommendation->update([
            'name' => request('name'),
            'description' => request('description'),
            'sex' => request('sex'),
            'weight' => request('weight'),
            'age' => request('age'),
            'intensity' => request('intensity')
        ]);
        return redirect('/recommendations');
    }

    public function destroy(Recommendation $recommendation)
    {
        $recommendation->delete();
        return redirect('/recommendations');
    }


    /*
        My recommendation
    */
    

}
