<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::query()
            ->orderBy('viewed')
            ->latest()
            ->get();
        $count_all_messages = $messages->count();
        $count_unread_messages = $messages->where('viewed', 0)->count();

        return view('messages.index', compact('count_all_messages', 'messages', 'count_unread_messages'));
    }

    public function store(Request $request)
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

    public function show(Message $message)
    {
        //
    }

    public function edit(Message $message)
    {
        if($message->viewed == 0) {
            $message->update(['viewed' => 1]);
        }

        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message)
    {
        //
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')->with('success', "Message has been deleted.");
    }
}
