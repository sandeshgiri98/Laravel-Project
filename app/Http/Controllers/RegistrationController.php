<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function index(){
        $url = url('/registration');
        $title= 'Register';
        $data = compact('url','title');
        return view ('registration.register')->with($data);
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
        $url = url('registration') . "/" . $id;
        $registration = Registration::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $registration = Registration::find($id);
        if(is_null($registration)){
            return redirect('registration.viewing');
        }else{
            $title ='Update';
            $url = url('/registration/update'). "/" . $id;
            $data = compact('registration','url','title');
            return view('registration.register')-> with($data);
        }
    }
    public function update($id, Request $request)
    {

        $registration = Registration::find($id);


        $registration->name = $request->input('name');
        $registration->email = $request->input('email');
        $registration->contact = $request->input('contact');
        $registration->dob = $request->input('dob');
        $registration->role = $request->input('role');


        $registration->save();

        return redirect('viewing');
    }
}
