<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Display a listing of the messages
    public function index()
    {
        $messages = ContactUs::all();
        return view('Admin.contactus.index', compact('messages'));
    }

    // Display the specified message
    public function show($id)
    {
        $message = ContactUs::findOrFail($id);
        return view('Admin.contactus.show', compact('message'));
    }

    // Remove the specified message from storage
    public function destroy($id)
    {
        $message = ContactUs::findOrFail($id);
        $message->delete();

        return redirect()->route('contactus.index')->with('success', 'Pesan berhasil dihapus.');
    }
}