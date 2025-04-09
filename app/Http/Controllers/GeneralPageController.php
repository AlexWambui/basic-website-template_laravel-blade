<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPageController extends Controller
{
    public function index()
    {
        return view('general-pages.index');
    }

    public function about()
    {
        return view('general-pages.about');
    }

    public function contact()
    {
        return view('general-pages.contact');
    }

    public function storeMessage(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|string|max:180',
            'email' => 'required|string|lowercase|email:rfc,dns|max:255',
            'phone_number' => 'required|string|max:30|min:10',
            'message' => 'required|string|max:2000',
        ]);

        Message::create($validated_data);

        return redirect()->back()->with('success', "Message sent. You'll receive a feedback soon");
    }

    public function services()
    {
        return view('general-pages.services');
    }
}
