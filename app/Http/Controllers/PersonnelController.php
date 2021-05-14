<?php

namespace App\Http\Controllers;

use App\Personnel;
use App\PersonnelType;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Validator;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $personnels = Personnel::all();
//blade view
        return view('personnel.index', compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personnel_types = PersonnelType::pluck('persRole','id');
        return view::make('personnel.create',compact('personnel_types'));
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

        // return redirect()->back()->withInput()->withErrors($validator);
        
        $personnel = new Personnel;
            $personnel->create($request->all());
            // $personnel->save();
            return redirect('personnel')->with('success','Personnel updated!');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        $personnel = Personnel::find($personnel->id);

        return view('personnel.show', compact('personnel'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {   


         $personnel_types = PersonnelType::pluck('persRole','id');
         $personnel=Personnel::find($id);
        return view::make('personnel.edit',compact('personnel','personnel_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        
        $personnel=Personnel::find($id);
        $personnel->update($request->all());
         return redirect('personnel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        $personnel = Personnel::find($personnel->id);
        $personnel->delete();
        
        return redirect('personnel')->with('success','Personnel Entry Deleted');
    }
}
