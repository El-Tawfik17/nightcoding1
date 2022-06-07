<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class UsersController extends Controller
{
    public function index(){
        return view('create');
    }
    public function store(){
        $user=new User();
        $user->name= request('name');
        $user->email= request('email');
        $user->comment=request('comment');
        $user->save();
        return redirect('/');
    }
    public function shows(){
        $users=User::all();

        return view('participant', compact('users'));
    }
    public function show($id){
        $user=User::find($id);
        return view('show',compact('user'));
    }
    public function edit($id){
        $user=User::find($id);
        return view('edit',compact('user'));
    }
    public function update($id){
        $user=User::find($id);
        $user->name= request('name');
        $user->email=request('email');
        $user->comment=request('comment');
        $user->save();
        return redirect('/participant');

    } 
    public function delete($id){
        $user=User::find($id);
        $user->delete();
        return redirect('/participant'); 


    }
}
