<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/user';

  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    	$users = User::all();
    	return view('users.index', compact('users'));
    }


    public function viewcreate(){

        return view('users.create');
    }

    protected function validator(array $data){



        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'photo' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }


    protected function create(array $data){

     

        // return User::create([
        //     'name' => $data['name'],
        //     'lastName' => $data['lastName'],
        //     'photo' => $data['photo'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    public function show($id){

        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    public function edit($id){

        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){


        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'lastName' => [
                'required',
                'string',
                'max:255',
            ],
            'photo' => [
                'required',
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users')->ignore($id),
            ],
            'password' => [
                'required',
                'string',
                'min:6',
            ],         
                          
        ]);

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $namePhoto = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/', $namePhoto);
        }

                    

    

    


        $users = User::find($id);
        $users->name = $request->input('name');
        $users->lastName = $request->input('lastName');
        $users->photo = $namePhoto;
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));
        $users->save();

        return redirect()->route('user.index')->with('info', 'Usuario actualizado con éxito');
    }


    public function destroy(Request $request, $id){
        
        if($request->ajax()){            
            
            User::find($id)->delete();
        }
    }

}
