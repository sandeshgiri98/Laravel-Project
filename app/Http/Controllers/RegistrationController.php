<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function index(){
        return view ('registration.register');
    }

    public function logon(){
        return view('registration.login');
    }
    public function view(){
        $registrations = Registration::all();
            return view ('registration.viewing', ['registrations'=> $registrations]);
    }


    public function store(Request $request){
        $data =$request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registrations,email',
            'contact' => 'required',
            'dob' => 'required|date',
            'password' => 'required|min:8',
            'role' => 'required',
        ]);
        $newRegistration = Registration::create($data);

        // Update the redirect route to match your defined route name
        return redirect()->route('registration.register');


    }
    public function delete($id){
        echo $id;
        die;
    }

}
