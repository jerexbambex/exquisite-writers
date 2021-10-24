<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = Contact::all();

        return view('admin.messages.index', compact('messages'));
    }

    public function show(Contact $message)
    {
        $message->status = "read";
        $message->update();

        return view('admin.messages.show', compact('message'));
    }

    public function update(Request $request, Contact $message)
    {
        $message->status = "new";
        $message->update();

        session()->flash('success', 'Updated Successfully');

        return redirect()->route('adminMessageIndex');
    }

    public function destroy(Contact $message)
    {
        $message->delete();

        session()->flash('success', 'Updated Successfully');

        return redirect()->route('adminMessageIndex');
    }

}
