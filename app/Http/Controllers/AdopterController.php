<?php

namespace App\Http\Controllers;
use App\AdoptLine;
use App\Adopter;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdopterController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         $adopters = Adopter::all();
//blade view
        return view('adopter.index', compact('adopters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adopter.create');
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
            'title' => 'required|max:50',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'contact' => 'required|integer',
            'address' => 'required|max:50',
            'email' => 'required|max:50',
            'town' => 'required|max:50',
            'gender' => 'required|max:50',
        ];

        $messages = [
            'required'=> 'Please fill necessary field',
            'max' => 'Invalid!',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $adopter = new Adopter;
        $adopter->title = $request->title;
        $adopter->first_name = $request->first_name;
        $adopter->last_name = $request->last_name;
        $adopter->address = $request->address;
        $adopter->town = $request->town;
        $adopter->email = $request->email;
        $adopter->gender = $request->gender;
        $adopter->contact = $request->contact;
        $adopter->save();

        return redirect('adopter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adopter  $adopter
     * @return \Illuminate\Http\Response
     */
    public function show(Adopter $adopter)
    {
        $adopter = Adopter::find($adopter->id);

        return view('adopter.show', compact('adopter')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Adopter $adopter)
    {
        $adopter = Adopter::find($adopter->id);

        return view('adopter.edit', compact('adopter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adopter $adopter)
    {

         $rules = [
            'title' => 'required|max:50',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'contact' => 'required|integer',
            'address' => 'required|max:50',
            'email' => 'required|max:50',
            'town' => 'required|max:50',
            'gender' => 'required|max:50',
        ];

        $messages = [
            'required'=> 'Please fill necessary field',
            'max' => 'Invalid!',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $adopter = Adopter::find($adopter->id);
        $adopter->title = $request->title;
        $adopter->first_name = $request->first_name;
        $adopter->last_name = $request->last_name;
        $adopter->address = $request->address;
        $adopter->town = $request->town;
        $adopter->email = $request->email;
        $adopter->gender = $request->gender;
        $adopter->contact = $request->contact;
        $adopter->save();

        return redirect('adopter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adopter $adopter)
    {
        $adopter = Adopter::find($adopter->id);
        $adopter->delete();
        
        return redirect('adopter');
    }
}
