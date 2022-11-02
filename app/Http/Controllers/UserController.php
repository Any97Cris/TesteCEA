<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',['users' => $users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;    
        $user->password = Hash::make($request->password); 

        $user->save();

        return redirect('/usuarios')->with('msg', 'Usuario cadastrado com sucesso');
    }

    public function edit($id){

        $user = User::findOrFail($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request,$id){
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;             
        
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }

        $user->save();   
        
        return redirect('/usuarios')->with('msg', 'Usuario atualizado com sucesso');

    }

    public function delete($id){

        $user = User::findOrFail($id);

        return view('users.delete', ['user' => $user]);
    }

    public function destroy($id){
        $user = User::findOrFail($id);

        $user->delete();   
        
        return redirect('/usuarios')->with('msg', 'Usuario removido com sucesso');

    }

}
