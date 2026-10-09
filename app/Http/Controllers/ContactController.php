<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'service' => 'required|string',
            'email' => 'required|email',
            'user_message' => 'required|string',
        ]);

        Mail::send('pages.emails.contact', $data, function ($message) use ($data) {
            $message->to('anandhammindcare@gmail.com') // 🔥 your receiving email
                    ->subject('New Contact Enquiry from ' . $data['name']);
        });

        return back()->with('success', 'Enquiry sent successfully!');
    }
}