<?php

namespace App\Http\Controllers;

use App\Disease;
use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $diseases = Disease::all();
//blade view
        return view('disease.index', compact('diseases'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('disease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $rules = [
            'name' => 'required|max:300',
            'description' => 'required|max:300',

        ];

        $messages = [
            'required'=> 'Please fill necessary field',
            'max' => 'Invalid!',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $disease = new Disease;
        $disease->name = $request->name;
        $disease->description = $request->description;
        $disease->save();

        return redirect('disease');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
          $disease = Disease::find($disease->id);

        return view('disease.show', compact('disease')); 
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        $disease = Disease::find($disease->id);

        return view('disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        $disease = Disease::find($disease->id);
        $disease->name = $request->name;
        $disease->description = $request->description;
        $disease->save();

        return redirect('disease');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        $disease = Disease::find($disease->id);
        $disease->delete();
        
        return redirect('disease');
    }

    // public function healthedit($id)
    // {
    //     $animal = Animal::find($id);
    //     $disease =Disease::pluck('name','id')->toArray();

    //     return view('disease.edit', compact('disease','animal'));
    // }
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function healthupdate(Request $request, $id)
    // {
    //     $animal = Animal::find($id);

    //     isset($request->id) ? $animal->update(['aniStatus'=>'Unavailable']) : $animal->update(['aniStatus'=>'Unavailable']);

    //     $animal->conditions()->sync($request->id);

    //     return redirect('animal');
    // }
}
