<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request){
        $data = $request->validate([
            'login' => 'nullable',
            'password'=> 'nullable',
            'name'=> 'nullable',
            'email' => 'nullable'
        ]);
        return $user = User::create($data);
    }

    public function view($id){
        $user = User::with(['users'])->find($id);
        return $user;
    }

    public function list(){
        $users = User::get();
        return $users;
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'login' => 'nullable',
            'password'=> 'nullable',
            'name'=> 'nullable',
            'email' => 'nullable'
        ]);
        $user = User::find($id)->update($data);
        return $user;
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return "Success";
    }
}
