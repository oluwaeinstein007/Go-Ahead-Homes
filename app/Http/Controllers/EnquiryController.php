<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contact');
    
    }

    public function successful()
    {
        //
        return view('email-success');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'content' => 'required',
            'subject' => 'required',
        ]);

        $enquiry = New Enquiry();

        
        $enquiry ->   name = $request -> name;
        $enquiry ->   email = $request -> email;
        $enquiry ->   number = $request -> number;
        $enquiry ->    content = $request -> content;
        $enquiry ->   subject = $request -> subject;

        if ($enquiry -> save() == true){
            return view('email-success');
        }
        else{
            echo 'Error';
            return back();
        }
          
        
        $admin_email = 'slanre26@gmail.com';

        Mail::to($admin_email) -> send(new contactMail($data));
       

        

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiry $enquiry)
    {
        //
        
        return view('email-view',[
            'enquiry' => $enquiry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquiry  $enquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}
