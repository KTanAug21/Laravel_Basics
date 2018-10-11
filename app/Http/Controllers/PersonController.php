<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Persons;

class PersonController extends Controller
{
    //
    function show_form()
    {
        return view('persons_list')->with('name',"KAT");
    }
    function list()
    {
        $users = Persons::all();
        return view('persons_list')->with('users',$users);
    }
    function insert( )
    {
        // Validate form input

        // Save form input 
        $person = new Persons;
        $person->name = Input::post('name');
        $person->save();
        
        // Show list
        return redirect('/persons/list');
    }
}
