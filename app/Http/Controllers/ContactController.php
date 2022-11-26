<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Contact;



class ContactController extends Controller

{

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required|digits:11|numeric',

            'subject' => 'required',

            'message' => 'required'

        ]);



        Contact::create($request->all());



        return redirect('/#contact')->with(['success' => 'Thanks! I will contact you shortly.']);

    }

}
