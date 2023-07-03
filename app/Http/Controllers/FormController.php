<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
        public function form1(){
            return view('form.form1');
        }
        public function form1Submit(Request $request){

            $name = $request->name;
            $email = $request->email;


            // $data = $request->except('_token');

            // dd($data);
            // return $request->all();

        //     return $request->only('name','email');

           return "Welcome $name your email is $email";

        }

        public function form2(){
            return view('form.form2');
        }

        public function form2Submit(Request $request){

            //  $date = $request->only('dob');
             $date = $request->dob;
            // dd($date);
            list($mouth, $day, $year) = explode('/', $date);

            return "انت ولدت في شهر $mouth في يوم $day في سنة $year" ;

        }


        public function form3(){
            return view('form.form3');
        }

        public function form3Submit(Request $request){

            $request->validate([
                'name' => ['required','min:5'],
                'email'=> ['required','email:rfc,dns'],
            ]);

        }

        public function form4(){
            return view('form.form4');
        }

        public function form4Submit(Request $request){

            $request->validate([
                'name' => 'required|min:3|max:20',
                'phone'=> 'required',
                'cv' => 'required|image|mimes:jpg|max:10000'
            ]);

            // dd($request->all());
            // $imgname = time() . $request->file('cv')->getClientOriginalName();
            $ex = $request->file('cv')->getClientOriginalExtension();
            $imgname = 'form_'.Time().'_'.rand(000000000,999999999).'.'. $ex;
            $request->file('cv')->move(public_path('uploads') , $imgname);
        }

        public function form5(){
            return view('form.form5');
        }

        public function form5Submit(Request $request){

            $request->validate([
                'name' => 'required',
                'email'=> 'required',
                'subject' =>'required',
                'message' => 'required',
                'cv' =>'required|file|mimes:pdf|max:5000'

            ]);

            // dd($request->all());

            $newname = str_replace(' ','_', strtolower($request->name));
            $ex = $request->file('cv')->getClientOriginalExtension();
            $imagename = 'cv_'.$newname.'_'. time(). rand().'.'.$ex;
            $request->file('cv')->move(public_path('uploads/cv'),$imagename);


// $data = $request->except('_token','cv','hoppies');
// $data['cv'] = $imagename;
// $data['hoppies'] = implode(', ', $request->hoppies);

// Mail::to('admin@info.com')->send(new ContactUsMail($data));

        }
    }
