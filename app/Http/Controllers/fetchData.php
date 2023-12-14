<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use Illuminate\Support\Facades\DB;

class fetchData extends Controller
{
    public function index()
    {
        // return DB::select('select * from students');
       $data['student']= students::all();
       return view('index',$data);
    }


    function addStudent(Request $req)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:18',
            'gender' => 'required|in:male,female,other',
            'phone_no' => 'required|numeric',
        ];

        // Custom error messages
        $messages = [
            'age.min' => 'The minimum age must be 18.',
            'gender.in' => 'Please select a valid gender.',
        ];

        // Validate the request
        $validatedData = $req->validate($rules, $messages);

        $students=new students();      
        $students->name=$req->input('name');
        $students->email=$req->input('email');
        $students->phone_no=$req->input('phone_no');
        $students->gender=$req->input('gender');
        $students->age=$req->input('age');
        $students->save();
       return redirect('/')->with('success', 'Data Added successfully!');
    }

    function delete($id)
    {
        $students = students::where('id',$id)->first();
        $students->delete();
        return redirect('/')->with('delete', 'Data Deleted successfully!');
    }

    function update(Request $req,$id){

        $students = students::where('id',$id)->first();     
        return view('edit',['students'=>$students]);
    }



    function edit(Request $req,$id)
    {
        // dd($req->all());
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:18',
            'gender' => 'required|in:male,female,other',
            'phone_no' => 'required|numeric',
        ];

        // Custom error messages
        $messages = [
            'age.min' => 'The minimum age must be 18.',
            'gender.in' => 'Please select a valid gender.',
        ];

        // Validate the request
        $validatedData = $req->validate($rules, $messages);



        $students = students::where('id',$id)->first();
     
        $students->name=$req->input('name');
        $students->email=$req->input('email');
        $students->phone_no=$req->input('phone_no');
        $students->gender=$req->input('gender');
        $students->age=$req->input('age');

        $students->save();
        return redirect('/')->with('success', 'Data Updated successfully!');
    }



    public function validation(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Process the form data, e.g., save to the database

        // Show success message using session and redirect
        return redirect('/validateForm')->with('success', 'Form submitted successfully!');
  
    }


   
}




