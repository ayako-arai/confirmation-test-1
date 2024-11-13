<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name','last_name', 'gender', 'email', 'tel', 'address', 'building', 'item','detail']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(Request $request)
    {
        $contact = $request->only(['first_name','last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }

    public function create(AuthorRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
    //
}
