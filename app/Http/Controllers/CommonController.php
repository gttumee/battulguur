<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function performed(){
        return view('performed');
    }

    public function contact(Request $request){
        if($request->all()){
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->text = $request->text;
            $contact->save();
        }
        return view('contact')->with('flash_message', 'Таны хүсэлт амжилттай илгээгдлээ.');
    }
    public function test(){
        return view('test');
    }
}