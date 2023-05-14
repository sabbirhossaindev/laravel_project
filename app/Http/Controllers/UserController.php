<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // create a user.
    public function create(){
        $data = [
            'name' => 'Sabbir Hossain',
            'email' => 'mdsabbir477470@gmail.com',
            'password' => 'sabbir50'
        ];

        User::create($data);
        return ('User create Successfully.');
    }

    // delete a user
    public function delete($id){
        {
            $user = User::fiendOrFail($id);
            $user->delete();

            return 'Deleted';
        }
    }

    // delete a user
    public function edit($id){
        {
            $user = User::fiendOrFail($id);
            $user->name = 'New name';
            $user->save();

            return 'Edit Done!';
        }
    }

    // database thka user dackta
    public function index(){
        {
            $users = User::all();
            return $users;
        }
    }

    // single data show
    public function show($id){
        {
            $user = User::find($id);
            return $user;
        }
    }
}