<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\PersonnelType;
use App\AnimalType;
use App\Animal;
use App\Personnel;
use App\Rescuer;
use App\Disease;
use App\Dash;
use App\ContactUs;
use View;

class DashController extends Controller
{

public function index()
{

 $personnels = Personnel::all();
 $data = ['LoggedUserinfo'=>Personnel::where('id',session('LoggedUser'))->first()];
    		// return view('dash.index',$data);
//blade view
        return view('dash.index',$data, compact('personnels'));
}

public function homepage()
{
     
    $animals = Animal::all();
if (session()->has('LoggedUser')){
	session()->pull('LoggedUser');
}

    return view('dash.home', compact('animals'));
}

public function showadopthome()
    {
    $animals=Animal::where('aniStatus','Available')->get();
    
    return view('dash.home', compact('animals'));

    }

public function login()
    {
    
    return view('auth.login');

    }
public function register()
    {
    
        $personnel_types = PersonnelType::pluck('persRole','id');
        return view::make('auth.register',compact('personnel_types'));

    }
public function save(Request $request)
    {

    	$rules = [
            'title' => 'required|max:50',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'contact' => 'required|integer',
            'address' => 'required|max:50',
            'email' => 'required|email|unique:personnels',
            'town' => 'required|max:50',
            'gender' => 'required|max:50',
            'password'=>'required|min:5|max:12'
        ];

        $messages = [
            'required'=> 'Please fill necessary field',
            'max' => 'Invalid!',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);

        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

    $personnel = new Personnel;
    $personnel->create($request->all());
    
    return redirect('login')->with('success','Personnel updated!');

    }



   public function check(Request $request)
   {

    	$request->validate([
    		'email' => 'required|email',
            'password'=>'required|min:5|max:12'

    	]);

    	$userinfo=Personnel::where('email',$request->email)->first();

    	if(!$userinfo){
    		return back()->with('fail','We do not recognize your email adddress');

    	}else{

    		if(! Hash::check($request->password,$userinfo->password)){
    			$request->session()->put('LoggedUser',$userinfo->id);
    			return redirect('dash');
    		}else{
    			return back()->with ('fail','Incorrect password');

    			
    		}
    	}

    	function dashboard(){
    		$data = ['LoggedUserinfo'=>Personnel::where('id',session('LoggedUser'))->first()];
    		return view('dash.index',$data);
    	}

    }



    public function contacts()
    {
    
    return view('welcome');

    }


public function conlist()
    {
        $contactus = ContactUs::all();
//blade view
        return view('dash.conlist', compact('contactus'));
    }


 public function destroy($id)
    {
        ContactUs::destroy($id);
        return redirect()->route('conlist')->withSuccess('Message successfully deleted!');
    }


}