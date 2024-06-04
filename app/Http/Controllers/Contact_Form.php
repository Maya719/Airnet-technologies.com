<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class Contact_Form extends Controller
{
    function contact_form(Request $request)
    {

        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // google reCaptcha

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'g-recaptcha-response' => 'recaptcha', //recaptcha validation
            ]);

            if ($validator->fails()) {

                return redirect()->route('index')->with('captcha_error', 'Captcha not verified');
                // return redirect()->Back()->withInput()->withErrors($validator);
            }
        } catch (\Throwable $th) {
            return redirect()->route('index')->with('error', 'Failed to send message.');
        }



        // saving to DB
        try {
            $contact_table = new Contact();

            $contact_table->name = $name;
            $contact_table->email = $email;
            $contact_table->subject = $subject;
            $contact_table->message = $message;
            $contact_table->sender = 'user';
            $contact_table->save();


            return redirect()->route('index')->with('success', 'Message has been send successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('index')->with('error', 'Failed to send message.');
        }
    }
    public function messages()
    {
        $defaultCollection = Contact::first();
        if ($defaultCollection) {
            return redirect()->route('messages.show', ['id' => $defaultCollection->id]);
        } else {
            $data = [
                'main_page' => 'Contact Us',
            ];
            return view('messages', $data);
        }
    }
    public function messages_show($id)
    {
        $contact = Contact::find($id);
        $email = $contact->email;
        $results = Contact::where('email', '=', $email)->get();
        $contact_table = Contact::groupBy('email')
            ->select('email', Contact::raw('MAX(id)
            as id'), Contact::raw('MAX(name) as name'), Contact::raw('MAX(message) as message'), Contact::raw('MAX(subject) as subject'),)
            ->get();

        $data = [
            'email' => $email,
            'current' => $results,
            'list' => $contact_table,
            'main_page' => 'Contact Us',
        ];
        return view('messages', $data);
    }
    public function send_message(Request $request)
    {

        $email = $request->post('email');
        $body = $request->post('message');
        $contact = Contact::where('email', $email)
            ->latest()
            ->first();

        $subject = $contact->subject;
        $name = $contact->name;

        if ($body == null) {
            return redirect()->back()->with('error', 'Message can not be empty');
        }

        $user = Contact::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $body,
            'sender' => 'admin'
        ]);
        Mail::to($email)->send(new MyMail($subject, $body));
        return redirect()->back()->with('success', 'Email has been Send');
    }
    public function delete_conversation(Request $request)
    {
        $email = $request->input('email');
        if (Contact::where('email', $email)->delete()) {

            session()->flash('success', 'Successfully Deleted');
            echo json_encode(array('status' => true));
        }
    }
}
