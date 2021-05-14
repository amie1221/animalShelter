<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\AnimalType;
use App\Animal;
use App\Personnel;
use App\Rescuer;
use App\Disease;
use View;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
//blade view
        return view('animal.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $animals=Animal::with('animal_types')->get();
      
       $animal_types = AnimalType::pluck('aniType_Desc','animal_type_id');
       $personnels = Personnel::pluck('last_name','id');
       $rescuers = Rescuer::pluck('last_name','id');
        return view::make('animal.create',compact('animal_types','personnels','rescuers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $animal= New Animal();
        $animal->aniName = $request->aniName;
        $animal->aniGender = $request->aniGender;
        $animal->aniBreed = $request->aniBreed;
        $animal->aniAge = $request->aniAge;
        $animal->aniColor = $request->aniColor;
        $animal->aniSize = $request->aniSize;     
        $animal->date_added = $request->date_added;

        $animal->aniType_id = $request->animal_type_id;
        $animal->employee_id = $request->employee_id;   
        $animal->rescue_id = $request->rescue_id;
       
        if($request->hasFile('aniImage')){
        $preview=$request->file('aniImage')->getClientOriginalName();
        $request->file('aniImage')->storeAs('public/images',$preview);
        $animal->aniImage='storage/images/'.$preview;
        }
        $animal->save();
        return redirect('animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        $animal = Animal::find($animal->id);

        return view('animal.show', compact('animal','animal_types','personnels','rescuers'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
       $animal = Animal::find($id);
       $animal_types = AnimalType::pluck('aniType_Desc','animal_type_id');
       $personnels = Personnel::pluck('last_name','id');
       $rescuers = Rescuer::pluck('last_name','id');
       
        return view::make('animal.edit',compact('animal_types','personnels','rescuers','animal'));

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
            'aniName' => 'required|max:50',
            'aniGender' => 'required|max:50',
            'aniBreed' => 'required|max:50',
            'aniAge' => 'required|integer',
            'aniColor' => 'required|max:50',
            'aniSize' => 'required|max:50',
            'date_added' => 'required|max:50',
            'aniType_id' => 'required|max:50',
            'employee_id' => 'required|max:50',
            'rescue_id' => 'required|max:50',
        ];

        $messages = [
            'required'=> 'Please fill necessary field',
            'max' => 'Invalid!',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $animal = Animal::find($id);
        $animal->aniName = $request->aniName;
        $animal->aniGender = $request->aniGender;
        $animal->aniBreed = $request->aniBreed;
        $animal->aniAge = $request->aniAge;
        $animal->aniColor = $request->aniColor;
        $animal->aniSize = $request->aniSize;     
        $animal->date_added = $request->date_added;

        $animal->aniType_id = $request->animal_type_id;
        $animal->employee_id = $request->employee_id;   
        $animal->rescue_id = $request->rescue_id;
       
        if($request->hasFile('aniImage')){
        $item_name=$request->file('aniImage')->getClientOriginalName();
        $request->file('aniImage')->storeAs('public/images',$item_name);
        $animal->aniImage='storage/images/'.$item_name;
        }
        $animal->save();
        return redirect('animal')->with('success','Thank you!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {


        $animal = Animal::find($animal->id);
        $animal->delete();
        
        return redirect('animal')->with('success','Animal Entry Deleted');
    }


      public function checks($id)
      {
       $animal = Animal::find($id);
       $animal_types = AnimalType::pluck('aniType_Desc','animal_type_id');
       $personnels = Personnel::pluck('last_name','id');
       $rescuers = Rescuer::pluck('last_name','id');
       // $diseases=Disease::pluck('name','id');
        // $animal = Animal::find($id);
        $disease =Disease::pluck('name','id')->toArray();       
        return view::make('animal.check',compact('animal_types','personnels','rescuers','animal','disease'));
      }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function healthupdate(Request $request, $id)
    {
        $animal = Animal::find($id);
// dd($animal);
       isset($request->disease_id)? $animal->update(['aniStatus'=>'Unavailable']):$animal->update(['aniStatus'=>'Available']);
       isset($request->disease_id)? $animal->update(['aniHtatus'=>'Unhealthy']):$animal->update(['aniHtatus'=>'Healthy']);

        $animal->disease()->sync($request->disease_id);

        return redirect('animal');
    }


//     public function showadopts()
//  {
//     $animals = Animal::all();
// //blade view
//         return view('animal.index', compact('animals'));
    // $animals=Animal::where('aniStatus','Available')->get();
    // return view('animal.showadopt', compact('animals'));

 // }
       public function searchAdoptable(Request $request)
    {

        $request->get('searchQuest');

        $animals= Animal::select('*')->where('aniBreed','like','%'.$request->get('searchQuest').'%')->where('aniStatus','Available')->orWhere('aniName','like','%'.$request->get('searchQuest').'%')->where('aniStatus','Available')->get();
        return json_encode($animals);


    }
  
}


