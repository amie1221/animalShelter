<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnimalType;
use App\Animal;
use App\Personnel;
use App\Rescuer;
use App\Disease;
use App\Adopter;
use App\Adoptline;
use View;

class AdoptlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $animals = Animal::with('rescuers')->get();


        // $animals=Animal::where('aniStatus','Adopted')->get();

        // $adopters = Adopter::with('adopt_lines')->get();
        $adoptlines=Adoptline::with('adopter','animal')->get();
          // dd($adoptlines);
        
//blade view
        return view('adoptline.index', compact('adoptlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $animals = Animal::with('adoptline')->get();
       $animal = Animal::pluck('aniName','id');
       $personnels = Personnel::pluck('last_name','id');
       $adopters = Adopter::pluck('last_name','id');

return view::make('adoptline.create',compact('animal','personnels','adopters','adoptline','animals'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
        $adoptline= New AdoptLine();
        $adoptline->animal_id = $request->animal_id;
        $adoptline->adoptLdate = $request->adoptLdate;
        $adoptline->adopter_id = $request->adopter_id;
        $adoptline->personnel_id = $request->personnel_id;

        $adoptline->save();

        $animals = Animal::find($request->animal_id);
        $animals->update(['aniStatus'=>'Adopted']);

    return redirect('adoptline');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        dd($request->id);

         $adoptline= New AdoptLine();
         $animal = Animal::find($id);
         $animal->update(['aniStatus'=>'Adopted']);
         DB::table('adopt_lines')->insert(['adoptLdate' => $adoptLdate, 'adopter_id' => $adopter_id,'personnel_id' => $personnel_id,'animal_id' => $animal_id]); 
         $adoptline->save();        
        return redirect('adoptline');
    }



 public function proceedAdopts(Request $request)
    {
     
        $adoptline= New AdoptLine();
        $adoptline->adoptLdate = $request->adoptLdate;
        $adoptline->adopter_id = $request->adopter_id;
        $adoptline->personnel_id = $request->personnel_id;
        $adoptline->animal_id = $request->animal_id;
        $adopter->save();

        return redirect('adoptline');
// return view::make('adoptline.create',compact('animals','personnels','rescuers','adopters'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function logcheck()
      {

       $animal = Animal::find($id);
       $animal_types = AnimalType::pluck('aniType_Desc','animal_type_id');
       $personnels = Personnel::pluck('last_name','id');
       $rescuers = Rescuer::pluck('last_name','id');

        $disease =Disease::pluck('name','id')->toArray();       
        return view::make('animal.check',compact('animal_types','personnels','rescuers','animal','disease'));
      }

    public function showadopts()
    {
    $animals=Animal::where('aniStatus','Available')->get();
    
    return view('adoptline.showadopt', compact('animals','adoptline'));

    }

     public function adoptpets($id)
      {
       $animal = Animal::find($id);
       $animal_types = AnimalType::pluck('aniType_Desc','animal_type_id');
       $personnels = Personnel::pluck('last_name','id');
       $rescuers = Rescuer::pluck('last_name','id');
       $adopters=Adopter::pluck('last_name','id');
       // $diseases=Disease::pluck('name','id');
        // $animal = Animal::find($id);
        // $disease =Disease::pluck('name','id')->toArray();       
        return view::make('adoptline.adoptpet',compact('animal_types','personnels','rescuers','adopters','animal','disease','adoptline'));
      }
  


  
 
}
