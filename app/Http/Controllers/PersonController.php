<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Persons;

class PersonController extends Controller
{
    
    // Rendering view showing list of persons
    function list()
    {
        $users = Persons::all();
        return view('persons.list')->with('users',$users);
    }
    function show_person($id)
    {
        $user = Persons::find($id);
        return view('persons.identity')->with('user',$user);
    }

    // Saving form input as row in Persons table 
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
    function update($id)
    {
        /* Get user to update */
        $user = Persons::find($id);

        /* Get form input */
        // Validate form input
        // Retrieve input and save
        $user->name = Input::post('name');
        $user->save();
        // Redirect to page
        return redirect('/persons/'.$id);
    }



    // Dummy controller functions
    function show_form()
    {
        return view('persons_list')->with('name',"KAT");
    }
    
}
