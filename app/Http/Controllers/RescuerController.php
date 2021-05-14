<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Rescuer;
use Redirect;
use Illuminate\Support\Facades\Validator;

class RescuerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rescuers = Rescuer::all();
//blade view
        return view('rescuer.index', compact('rescuers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rescuer.create');
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

        $rescuer = new Rescuer;
        $rescuer->title = $request->title;
        $rescuer->first_name = $request->first_name;
        $rescuer->last_name = $request->last_name;
        $rescuer->address = $request->address;
        $rescuer->town = $request->town;
        $rescuer->email = $request->email;
        $rescuer->gender = $request->gender;
        $rescuer->contact = $request->contact;
        $rescuer->save();
        return Redirect::to('rescuer')->with('success','New rescuer added!');


}
    /**
     * Display the specified resource.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function show(Rescuer $rescuer)
    {
        $rescuer = Rescuer::find($rescuer->id);

        return view('rescuer.show', compact('rescuer'));   
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function edit(Rescuer $rescuer)
    {
        $rescuer = Rescuer::find($rescuer->id);

        return view('rescuer.edit', compact('rescuer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rescuer $rescuer)
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
        $rescuer = Rescuer::find($rescuer->id);
        $rescuer->title = $request->title;
        $rescuer->first_name = $request->first_name;
        $rescuer->last_name = $request->last_name;
        $rescuer->address = $request->address;
        $rescuer->town = $request->town;
        $rescuer->email = $request->email;
        $rescuer->gender = $request->gender;
        $rescuer->contact = $request->contact;
        $rescuer->save();

        return redirect('rescuer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rescuer $rescuer)
    {
        $rescuer = Rescuer::find($rescuer->id);
        $rescuer->delete();
        
        return redirect('rescuer');
    }

 
 private function validations($request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'contact' => 'required|integer',
            'address' => 'required|max:50',
            'email' => 'required|max:50',
            'town' => 'required|max:50',
            'gender' => 'required|max:50',


        ], [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'title.required' => 'Title name is required.',
            'contact.required' => 'contact is required.',
            'address.required' => 'address is required.',
            'email.required' => 'email is required.',
            'town.required' => 'town is required.',
            'gender.required' => 'gender is required.',
           
        ]);
    }



}
