<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Rescue;

class RescueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rescues = Rescue::all();

        return view('rescues.index', compact('rescues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rescues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rescue = new Rescue;
        $rescue->title = $request->title;
        $rescue->first_name = $request->first_name;
        $rescue->last_name = $request->last_name;
        $rescue->address = $request->address;
        $rescue->town = $request->town;
        $rescue->email = $request->email;
        $rescue->gender = $request->gender;
        $rescue->contact = $request->contact;
        $rescue->save();

        return redirect('rescues');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function show(Rescue $rescue)
    {
        $rescue = Rescue::find($rescue->id);

        return view('rescues.show', compact('rescue'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function edit(Rescue $rescue)
    {
        $rescue = Rescue::find($rescue->id);

        return view('rescues.edit', compact('rescue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rescue $rescue)
    {
        $rescue = Rescue::find($rescue->id);
        $rescue->title = $request->title;
        $rescue->first_name = $request->first_name;
        $rescue->last_name = $request->last_name;
        $rescue->address = $request->address;
        $rescue->town = $request->town;
        $rescue->email = $request->email;
        $rescue->gender = $request->gender;
        $rescue->contact = $request->contact;
        $rescue->save();

        return redirect('rescues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rescuer  $rescuer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rescue $rescue)
    {
        $rescue = Rescue::find($rescue->id);
        $rescue->delete();
        
        return redirect('rescues');
    }
}
