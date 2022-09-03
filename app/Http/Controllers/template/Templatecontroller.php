<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateRequest;
use App\Mail\ContactMail;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;



class Templatecontroller extends Controller
{
    //
    public function index()
    {
        return view('template.index');
    }

    public function service()
    {
        return view('template.service');
    }

    public function about()
    {
        return view('template.about');
    }

    public function contact()
    {
        return view('template.contact');
    }

    public function detail()
    {
        return view('template.detail');
    }

    public function login()
    {
        return view('template.login');
    }

    public function apply()
    {
        return view('template.apply');
    }

    public function store(Request $request)
    {
       
        $validate = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email' => 'required|email',
            'phone_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'city'=>'required',
            'street'=>'required',
            'house_name'=>'required',
            'loana'=>'required',
            'loant'=>'required', 
            'gender'=>'required',
            'status'=>'required',
            'monthly_income'=>'required',

        ]);
        $client =new Client;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;
        $client->city = $request->city;
        $client->street = $request->street;
        $client->house_name = $request->house_name;
        $client->loana = $request->loana;
        $client->loant = $request->loant;
        $client->gender = $request->gender;
        $client->status = $request->status;
        $client->monthly_income = $request->monthly_income;
        $client->save();

        return redirect('/')->with('status','Your request was Apply successfuly');
    }

    public function contactstore(Request $request)
    {
       
        $data = $request->validate([
           'name'=>"required",
           'email'=>"required|email",
           'phone'=>"required",
           'message'=>"required",

        ]);
       Mail::to('dohfawaz90@gmail.com')->send(new ContactMail($data));
    }

}
